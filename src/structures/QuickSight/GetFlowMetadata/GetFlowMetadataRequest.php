<?php

namespace Sunaoka\Aws\Structures\QuickSight\GetFlowMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $FlowId
 */
class GetFlowMetadataRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     FlowId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
