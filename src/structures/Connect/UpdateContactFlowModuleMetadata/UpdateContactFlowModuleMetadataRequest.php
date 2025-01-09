<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactFlowModuleMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactFlowModuleId
 * @property string $Name
 * @property string $Description
 * @property 'ACTIVE'|'ARCHIVED' $State
 */
class UpdateContactFlowModuleMetadataRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactFlowModuleId: string,
     *     Name?: string,
     *     Description?: string,
     *     State?: 'ACTIVE'|'ARCHIVED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
