<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\UpdateTelemetryRuleForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleIdentifier
 * @property Shapes\TelemetryRule $Rule
 */
class UpdateTelemetryRuleForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     RuleIdentifier: string,
     *     Rule: Shapes\TelemetryRule
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
