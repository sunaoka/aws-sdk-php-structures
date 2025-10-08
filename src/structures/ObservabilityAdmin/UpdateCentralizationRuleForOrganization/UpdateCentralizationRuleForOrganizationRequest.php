<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\UpdateCentralizationRuleForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleIdentifier
 * @property Shapes\CentralizationRule $Rule
 */
class UpdateCentralizationRuleForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     RuleIdentifier: string,
     *     Rule: Shapes\CentralizationRule
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
