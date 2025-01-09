<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateConfigurationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ReputationMetricsEnabled
 * @property \Aws\Api\DateTimeResult $LastFreshStart
 */
class ReputationOptions extends Shape
{
    /**
     * @param array{
     *     ReputationMetricsEnabled?: bool,
     *     LastFreshStart?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
