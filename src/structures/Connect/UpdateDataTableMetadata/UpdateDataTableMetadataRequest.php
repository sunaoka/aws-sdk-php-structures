<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateDataTableMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $DataTableId
 * @property string $Name
 * @property string|null $Description
 * @property 'NONE'|'DATA_TABLE'|'PRIMARY_VALUE'|'ATTRIBUTE'|'VALUE' $ValueLockLevel
 * @property string $TimeZone
 */
class UpdateDataTableMetadataRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     DataTableId: string,
     *     Name: string,
     *     Description?: string|null,
     *     ValueLockLevel: 'NONE'|'DATA_TABLE'|'PRIMARY_VALUE'|'ATTRIBUTE'|'VALUE',
     *     TimeZone: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
