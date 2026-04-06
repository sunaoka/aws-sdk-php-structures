<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\DeleteTelemetryRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleIdentifier
 */
class DeleteTelemetryRuleRequest extends Request
{
    /**
     * @param array{RuleIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
