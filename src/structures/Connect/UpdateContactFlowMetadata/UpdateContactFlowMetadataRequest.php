<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactFlowMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactFlowId
 * @property string|null $Name
 * @property string|null $Description
 * @property 'ACTIVE'|'ARCHIVED'|null $ContactFlowState
 */
class UpdateContactFlowMetadataRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactFlowId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     ContactFlowState?: 'ACTIVE'|'ARCHIVED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
