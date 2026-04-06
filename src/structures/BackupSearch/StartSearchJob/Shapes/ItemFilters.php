<?php

namespace Sunaoka\Aws\Structures\BackupSearch\StartSearchJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<S3ItemFilter>|null $S3ItemFilters
 * @property list<EBSItemFilter>|null $EBSItemFilters
 */
class ItemFilters extends Shape
{
    /**
     * @param array{
     *     S3ItemFilters?: list<S3ItemFilter>|null,
     *     EBSItemFilters?: list<EBSItemFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
