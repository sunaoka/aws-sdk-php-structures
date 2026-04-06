<?php

namespace Sunaoka\Aws\Structures\Connect\BatchCreateDataTableValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PrimaryValue>|null $PrimaryValues
 * @property string $AttributeName
 * @property string $Value
 * @property DataTableLockVersion|null $LockVersion
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastModifiedRegion
 */
class DataTableValue extends Shape
{
    /**
     * @param array{
     *     PrimaryValues?: list<PrimaryValue>|null,
     *     AttributeName: string,
     *     Value: string,
     *     LockVersion?: DataTableLockVersion|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedRegion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
