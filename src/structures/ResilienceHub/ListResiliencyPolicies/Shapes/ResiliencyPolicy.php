<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListResiliencyPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property 'AnyLocation'|'SameContinent'|'SameCountry' $dataLocationConstraint
 * @property 'L1'|'L2'|'L3'|'L4' $estimatedCostTier
 * @property array<'Software'|'Hardware'|'AZ'|'Region', FailurePolicy> $policy
 * @property string $policyArn
 * @property string $policyDescription
 * @property string $policyName
 * @property array<string, string> $tags
 * @property 'MissionCritical'|'Critical'|'Important'|'CoreServices'|'NonCritical'|'NotApplicable' $tier
 */
class ResiliencyPolicy extends Shape
{
    /**
     * @param array{
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     dataLocationConstraint?: 'AnyLocation'|'SameContinent'|'SameCountry',
     *     estimatedCostTier?: 'L1'|'L2'|'L3'|'L4',
     *     policy?: array<'Software'|'Hardware'|'AZ'|'Region', FailurePolicy>,
     *     policyArn?: string,
     *     policyDescription?: string,
     *     policyName?: string,
     *     tags?: array<string, string>,
     *     tier?: 'MissionCritical'|'Critical'|'Important'|'CoreServices'|'NonCritical'|'NotApplicable'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
