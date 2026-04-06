<?php

namespace Sunaoka\Aws\Structures\Connect\CreateContactFlowVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $Description
 * @property string $ContactFlowId
 * @property string|null $FlowContentSha256
 * @property int<1, max>|null $ContactFlowVersion
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastModifiedRegion
 */
class CreateContactFlowVersionRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Description?: string|null,
     *     ContactFlowId: string,
     *     FlowContentSha256?: string|null,
     *     ContactFlowVersion?: int<1, max>|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedRegion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
