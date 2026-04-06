<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeLoadBasedAutoScaling;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $LayerIds
 */
class DescribeLoadBasedAutoScalingRequest extends Request
{
    /**
     * @param array{LayerIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
