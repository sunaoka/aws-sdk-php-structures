<?php

namespace Sunaoka\Aws\Structures\Connect\CreateDataTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Name
 * @property string|null $Description
 * @property string $TimeZone
 * @property 'NONE'|'DATA_TABLE'|'PRIMARY_VALUE'|'ATTRIBUTE'|'VALUE' $ValueLockLevel
 * @property 'PUBLISHED' $Status
 * @property array<string, string>|null $Tags
 */
class CreateDataTableRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Name: string,
     *     Description?: string|null,
     *     TimeZone: string,
     *     ValueLockLevel: 'NONE'|'DATA_TABLE'|'PRIMARY_VALUE'|'ATTRIBUTE'|'VALUE',
     *     Status: 'PUBLISHED',
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
