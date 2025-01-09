<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeTrafficDistributionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrafficDistributionGroupId
 */
class DescribeTrafficDistributionGroupRequest extends Request
{
    /**
     * @param array{TrafficDistributionGroupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
