<?php

namespace Sunaoka\Aws\Structures\Connect\BatchDescribeDataTableValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RecordId
 * @property string $AttributeId
 * @property list<PrimaryValueResponse> $PrimaryValues
 * @property string $AttributeName
 * @property string|null $Value
 * @property DataTableLockVersion $LockVersion
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastModifiedRegion
 */
class BatchDescribeDataTableValueSuccessResult extends Shape
{
    /**
     * @param array{
     *     RecordId: string,
     *     AttributeId: string,
     *     PrimaryValues: list<PrimaryValueResponse>,
     *     AttributeName: string,
     *     Value?: string|null,
     *     LockVersion: DataTableLockVersion,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedRegion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
