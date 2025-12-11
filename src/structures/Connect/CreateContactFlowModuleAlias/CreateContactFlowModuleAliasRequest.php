<?php

namespace Sunaoka\Aws\Structures\Connect\CreateContactFlowModuleAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $Description
 * @property string $ContactFlowModuleId
 * @property int<1, max> $ContactFlowModuleVersion
 * @property string $AliasName
 */
class CreateContactFlowModuleAliasRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Description?: string|null,
     *     ContactFlowModuleId: string,
     *     ContactFlowModuleVersion: int<1, max>,
     *     AliasName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
