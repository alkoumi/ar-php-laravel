<?php

namespace StillCode\ArPhpLaravel;

trait SearchAr
{
    public function scopeSearchAr(mixed $query, string $field, string $search): mixed
    {
        $Arabic = new \ArPHP\I18N\Arabic();
        $Arabic->setQueryStrFields($field);
        $Arabic->setQueryMode(1);
        $strCondition = $Arabic->arQueryWhereCondition($search);

        $query->whereRaw($strCondition);

        return $query;
    }
}
