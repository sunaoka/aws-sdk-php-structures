<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteContactFlowModuleAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactFlowModuleId
 * @property string $AliasId
 */
class DeleteContactFlowModuleAliasRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactFlowModuleId: string,
     *     AliasId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
