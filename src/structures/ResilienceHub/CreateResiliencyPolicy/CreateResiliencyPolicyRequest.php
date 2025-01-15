<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\CreateResiliencyPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property 'AnyLocation'|'SameContinent'|'SameCountry'|null $dataLocationConstraint
 * @property array<'Software'|'Hardware'|'AZ'|'Region', Shapes\FailurePolicy> $policy
 * @property string|null $policyDescription
 * @property string $policyName
 * @property array<string, string>|null $tags
 * @property 'MissionCritical'|'Critical'|'Important'|'CoreServices'|'NonCritical'|'NotApplicable' $tier
 */
class CreateResiliencyPolicyRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     dataLocationConstraint?: 'AnyLocation'|'SameContinent'|'SameCountry'|null,
     *     policy: array<'Software'|'Hardware'|'AZ'|'Region', Shapes\FailurePolicy>,
     *     policyDescription?: string|null,
     *     policyName: string,
     *     tags?: array<string, string>|null,
     *     tier: 'MissionCritical'|'Critical'|'Important'|'CoreServices'|'NonCritical'|'NotApplicable'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
