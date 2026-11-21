<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\PutOrganizationEnrollmentConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\OrganizationTarget $target
 * @property 'AnyAllowed'|'NoneAllowed'|null $organizationRuleMode
 * @property string|null $clientToken
 */
class PutOrganizationEnrollmentConfigurationRequest extends Request
{
    /**
     * @param array{
     *     target: Shapes\OrganizationTarget,
     *     organizationRuleMode?: 'AnyAllowed'|'NoneAllowed'|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
