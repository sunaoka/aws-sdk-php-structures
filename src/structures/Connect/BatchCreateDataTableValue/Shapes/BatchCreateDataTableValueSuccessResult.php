<?php

namespace Sunaoka\Aws\Structures\Connect\BatchCreateDataTableValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PrimaryValue> $PrimaryValues
 * @property string $AttributeName
 * @property string $RecordId
 * @property DataTableLockVersion $LockVersion
 */
class BatchCreateDataTableValueSuccessResult extends Shape
{
    /**
     * @param array{
     *     PrimaryValues: list<PrimaryValue>,
     *     AttributeName: string,
     *     RecordId: string,
     *     LockVersion: DataTableLockVersion
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
