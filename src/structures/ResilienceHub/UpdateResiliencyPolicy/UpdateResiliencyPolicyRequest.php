<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\UpdateResiliencyPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AnyLocation'|'SameContinent'|'SameCountry' $dataLocationConstraint
 * @property array<'Software'|'Hardware'|'AZ'|'Region', Shapes\FailurePolicy> $policy
 * @property string $policyArn
 * @property string $policyDescription
 * @property string $policyName
 * @property 'MissionCritical'|'Critical'|'Important'|'CoreServices'|'NonCritical'|'NotApplicable' $tier
 */
class UpdateResiliencyPolicyRequest extends Request
{
    /**
     * @param array{
     *     dataLocationConstraint?: 'AnyLocation'|'SameContinent'|'SameCountry',
     *     policy?: array<'Software'|'Hardware'|'AZ'|'Region', Shapes\FailurePolicy>,
     *     policyArn: string,
     *     policyDescription?: string,
     *     policyName?: string,
     *     tier?: 'MissionCritical'|'Critical'|'Important'|'CoreServices'|'NonCritical'|'NotApplicable'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
