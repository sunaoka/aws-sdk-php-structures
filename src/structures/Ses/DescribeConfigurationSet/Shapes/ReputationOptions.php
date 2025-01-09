<?php

namespace Sunaoka\Aws\Structures\Ses\DescribeConfigurationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $SendingEnabled
 * @property bool $ReputationMetricsEnabled
 * @property \Aws\Api\DateTimeResult $LastFreshStart
 */
class ReputationOptions extends Shape
{
    /**
     * @param array{
     *     SendingEnabled?: bool,
     *     ReputationMetricsEnabled?: bool,
     *     LastFreshStart?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
