<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactFlowModuleAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactFlowModuleId
 * @property string $AliasId
 * @property string|null $Name
 * @property string|null $Description
 * @property int<1, max>|null $ContactFlowModuleVersion
 */
class UpdateContactFlowModuleAliasRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactFlowModuleId: string,
     *     AliasId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     ContactFlowModuleVersion?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
