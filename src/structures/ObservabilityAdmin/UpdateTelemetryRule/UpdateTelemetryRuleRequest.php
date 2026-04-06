<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\UpdateTelemetryRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleIdentifier
 * @property Shapes\TelemetryRule $Rule
 */
class UpdateTelemetryRuleRequest extends Request
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
