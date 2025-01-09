<?php

namespace Sunaoka\Aws\Structures\BackupSearch\GetSearchJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<S3ItemFilter> $S3ItemFilters
 * @property list<EBSItemFilter> $EBSItemFilters
 */
class ItemFilters extends Shape
{
    /**
     * @param array{
     *     S3ItemFilters?: list<S3ItemFilter>,
     *     EBSItemFilters?: list<EBSItemFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
