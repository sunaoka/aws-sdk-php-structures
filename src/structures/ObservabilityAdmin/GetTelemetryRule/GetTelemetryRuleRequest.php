<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetTelemetryRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleIdentifier
 */
class GetTelemetryRuleRequest extends Request
{
    /**
     * @param array{RuleIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
