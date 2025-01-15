<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\UpdateResiliencyPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AnyLocation'|'SameContinent'|'SameCountry'|null $dataLocationConstraint
 * @property array<'Software'|'Hardware'|'AZ'|'Region', Shapes\FailurePolicy>|null $policy
 * @property string $policyArn
 * @property string|null $policyDescription
 * @property string|null $policyName
 * @property 'MissionCritical'|'Critical'|'Important'|'CoreServices'|'NonCritical'|'NotApplicable'|null $tier
 */
class UpdateResiliencyPolicyRequest extends Request
{
    /**
     * @param array{
     *     dataLocationConstraint?: 'AnyLocation'|'SameContinent'|'SameCountry'|null,
     *     policy?: array<'Software'|'Hardware'|'AZ'|'Region', Shapes\FailurePolicy>|null,
     *     policyArn: string,
     *     policyDescription?: string|null,
     *     policyName?: string|null,
     *     tier?: 'MissionCritical'|'Critical'|'Important'|'CoreServices'|'NonCritical'|'NotApplicable'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
