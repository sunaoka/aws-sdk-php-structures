<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\DeleteOrganizationEnrollmentConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\OrganizationTarget $target
 * @property list<'OrganizationRuleMode'> $configurationTypes
 * @property string|null $clientToken
 */
class DeleteOrganizationEnrollmentConfigurationRequest extends Request
{
    /**
     * @param array{
     *     target: Shapes\OrganizationTarget,
     *     configurationTypes: list<'OrganizationRuleMode'>,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
