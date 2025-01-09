<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeMetricAttribution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $metricAttributionArn
 */
class DescribeMetricAttributionRequest extends Request
{
    /**
     * @param array{metricAttributionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
