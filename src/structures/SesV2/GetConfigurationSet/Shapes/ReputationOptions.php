<?php

namespace Sunaoka\Aws\Structures\SesV2\GetConfigurationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $ReputationMetricsEnabled
 * @property \Aws\Api\DateTimeResult|null $LastFreshStart
 */
class ReputationOptions extends Shape
{
    /**
     * @param array{
     *     ReputationMetricsEnabled?: bool|null,
     *     LastFreshStart?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
