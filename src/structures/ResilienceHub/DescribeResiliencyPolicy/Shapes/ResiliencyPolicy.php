<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeResiliencyPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property 'AnyLocation'|'SameContinent'|'SameCountry'|null $dataLocationConstraint
 * @property 'L1'|'L2'|'L3'|'L4'|null $estimatedCostTier
 * @property array<'Software'|'Hardware'|'AZ'|'Region', FailurePolicy>|null $policy
 * @property string|null $policyArn
 * @property string|null $policyDescription
 * @property string|null $policyName
 * @property array<string, string>|null $tags
 * @property 'MissionCritical'|'Critical'|'Important'|'CoreServices'|'NonCritical'|'NotApplicable'|null $tier
 */
class ResiliencyPolicy extends Shape
{
    /**
     * @param array{
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     dataLocationConstraint?: 'AnyLocation'|'SameContinent'|'SameCountry'|null,
     *     estimatedCostTier?: 'L1'|'L2'|'L3'|'L4'|null,
     *     policy?: array<'Software'|'Hardware'|'AZ'|'Region', FailurePolicy>|null,
     *     policyArn?: string|null,
     *     policyDescription?: string|null,
     *     policyName?: string|null,
     *     tags?: array<string, string>|null,
     *     tier?: 'MissionCritical'|'Critical'|'Important'|'CoreServices'|'NonCritical'|'NotApplicable'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
