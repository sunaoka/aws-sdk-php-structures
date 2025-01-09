<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactFlowMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactFlowId
 * @property string $Name
 * @property string $Description
 * @property 'ACTIVE'|'ARCHIVED' $ContactFlowState
 */
class UpdateContactFlowMetadataRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactFlowId: string,
     *     Name?: string,
     *     Description?: string,
     *     ContactFlowState?: 'ACTIVE'|'ARCHIVED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
