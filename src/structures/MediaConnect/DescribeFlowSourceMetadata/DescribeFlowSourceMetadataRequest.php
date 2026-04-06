<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlowSourceMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlowArn
 */
class DescribeFlowSourceMetadataRequest extends Request
{
    /**
     * @param array{FlowArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
