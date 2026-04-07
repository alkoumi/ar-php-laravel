<?php

namespace StillCode\ArPhpLaravel;

class Macroables
{
    public static function setSearchWheres(mixed $query, string $search, string $field, string $mode = 'OR'): mixed
    {
        $Arabic = new \ArPHP\I18N\Arabic();
        $Arabic->setQueryStrFields($field);
        $setMode = ($mode === 'AND') ? 1 : 0;
        $Arabic->setQueryMode($setMode);
        $strCondition = $Arabic->arQueryWhereCondition($search);

        return $query->whereRaw($strCondition);
    }

    public static function setSearchOrder(mixed $query, string $search, string $field): mixed
    {
        $Arabic = new \ArPHP\I18N\Arabic();
        $Arabic->setQueryStrFields($field);
        $strCondition = $Arabic->arQueryOrderBy($search);

        return $query->orderByRaw($strCondition);
    }
}
