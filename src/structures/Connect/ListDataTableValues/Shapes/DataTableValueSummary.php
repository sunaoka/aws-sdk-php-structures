<?php

namespace Sunaoka\Aws\Structures\Connect\ListDataTableValues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RecordId
 * @property string|null $AttributeId
 * @property list<PrimaryValueResponse> $PrimaryValues
 * @property string $AttributeName
 * @property 'TEXT'|'NUMBER'|'BOOLEAN'|'TEXT_LIST'|'NUMBER_LIST' $ValueType
 * @property string $Value
 * @property DataTableLockVersion|null $LockVersion
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastModifiedRegion
 */
class DataTableValueSummary extends Shape
{
    /**
     * @param array{
     *     RecordId?: string|null,
     *     AttributeId?: string|null,
     *     PrimaryValues: list<PrimaryValueResponse>,
     *     AttributeName: string,
     *     ValueType: 'TEXT'|'NUMBER'|'BOOLEAN'|'TEXT_LIST'|'NUMBER_LIST',
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
