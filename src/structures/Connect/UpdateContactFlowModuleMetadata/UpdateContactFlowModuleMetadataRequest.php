<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactFlowModuleMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactFlowModuleId
 * @property string|null $Name
 * @property string|null $Description
 * @property 'ACTIVE'|'ARCHIVED'|null $State
 */
class UpdateContactFlowModuleMetadataRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactFlowModuleId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     State?: 'ACTIVE'|'ARCHIVED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
