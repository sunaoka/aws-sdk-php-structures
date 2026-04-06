<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateTelemetryRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleName
 * @property Shapes\TelemetryRule $Rule
 * @property array<string, string>|null $Tags
 */
class CreateTelemetryRuleRequest extends Request
{
    /**
     * @param array{
     *     RuleName: string,
     *     Rule: Shapes\TelemetryRule,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
