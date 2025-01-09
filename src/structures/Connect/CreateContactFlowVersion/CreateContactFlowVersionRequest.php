<?php

namespace Sunaoka\Aws\Structures\Connect\CreateContactFlowVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Description
 * @property string $ContactFlowId
 * @property string $FlowContentSha256
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LastModifiedRegion
 */
class CreateContactFlowVersionRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Description?: string,
     *     ContactFlowId: string,
     *     FlowContentSha256?: string,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedRegion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
