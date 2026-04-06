<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetTelemetryRuleForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleIdentifier
 */
class GetTelemetryRuleForOrganizationRequest extends Request
{
    /**
     * @param array{RuleIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
