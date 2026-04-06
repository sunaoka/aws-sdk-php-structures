<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlowSourceThumbnail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlowArn
 */
class DescribeFlowSourceThumbnailRequest extends Request
{
    /**
     * @param array{FlowArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
