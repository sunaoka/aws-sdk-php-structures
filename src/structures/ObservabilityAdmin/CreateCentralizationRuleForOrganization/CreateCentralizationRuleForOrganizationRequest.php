<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateCentralizationRuleForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleName
 * @property Shapes\CentralizationRule $Rule
 * @property array<string, string>|null $Tags
 */
class CreateCentralizationRuleForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     RuleName: string,
     *     Rule: Shapes\CentralizationRule,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
