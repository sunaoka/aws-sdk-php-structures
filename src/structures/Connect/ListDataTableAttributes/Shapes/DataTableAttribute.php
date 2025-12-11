<?php

namespace Sunaoka\Aws\Structures\Connect\ListDataTableAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttributeId
 * @property string $Name
 * @property 'TEXT'|'NUMBER'|'BOOLEAN'|'TEXT_LIST'|'NUMBER_LIST' $ValueType
 * @property string|null $Description
 * @property string|null $DataTableId
 * @property string|null $DataTableArn
 * @property bool|null $Primary
 * @property string|null $Version
 * @property DataTableLockVersion|null $LockVersion
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastModifiedRegion
 * @property Validation|null $Validation
 */
class DataTableAttribute extends Shape
{
    /**
     * @param array{
     *     AttributeId?: string|null,
     *     Name: string,
     *     ValueType: 'TEXT'|'NUMBER'|'BOOLEAN'|'TEXT_LIST'|'NUMBER_LIST',
     *     Description?: string|null,
     *     DataTableId?: string|null,
     *     DataTableArn?: string|null,
     *     Primary?: bool|null,
     *     Version?: string|null,
     *     LockVersion?: DataTableLockVersion|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedRegion?: string|null,
     *     Validation?: Validation|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
