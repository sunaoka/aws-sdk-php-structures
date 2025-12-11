<?php

namespace Sunaoka\Aws\Structures\Connect\BatchDeleteDataTableValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PrimaryValue> $PrimaryValues
 * @property string $AttributeName
 * @property DataTableLockVersion $LockVersion
 */
class BatchDeleteDataTableValueSuccessResult extends Shape
{
    /**
     * @param array{
     *     PrimaryValues: list<PrimaryValue>,
     *     AttributeName: string,
     *     LockVersion: DataTableLockVersion
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
