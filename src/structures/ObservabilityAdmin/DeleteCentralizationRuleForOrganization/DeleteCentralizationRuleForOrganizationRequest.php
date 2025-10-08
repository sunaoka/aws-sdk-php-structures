<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\DeleteCentralizationRuleForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleIdentifier
 */
class DeleteCentralizationRuleForOrganizationRequest extends Request
{
    /**
     * @param array{RuleIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
