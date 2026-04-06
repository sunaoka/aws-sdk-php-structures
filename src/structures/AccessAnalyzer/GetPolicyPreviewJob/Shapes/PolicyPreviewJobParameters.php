<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetPolicyPreviewJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property list<PolicyConfiguration> $policyConfigurations
 */
class PolicyPreviewJobParameters extends Shape
{
    /**
     * @param array{
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     policyConfigurations: list<PolicyConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
