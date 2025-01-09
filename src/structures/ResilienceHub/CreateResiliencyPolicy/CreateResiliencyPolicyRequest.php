<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\CreateResiliencyPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property 'AnyLocation'|'SameContinent'|'SameCountry' $dataLocationConstraint
 * @property array<'Software'|'Hardware'|'AZ'|'Region', Shapes\FailurePolicy> $policy
 * @property string $policyDescription
 * @property string $policyName
 * @property array<string, string> $tags
 * @property 'MissionCritical'|'Critical'|'Important'|'CoreServices'|'NonCritical'|'NotApplicable' $tier
 */
class CreateResiliencyPolicyRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     dataLocationConstraint?: 'AnyLocation'|'SameContinent'|'SameCountry',
     *     policy: array<'Software'|'Hardware'|'AZ'|'Region', Shapes\FailurePolicy>,
     *     policyDescription?: string,
     *     policyName: string,
     *     tags?: array<string, string>,
     *     tier: 'MissionCritical'|'Critical'|'Important'|'CoreServices'|'NonCritical'|'NotApplicable'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
