<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetCentralizationRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CentralizationRuleSource $Source
 * @property CentralizationRuleDestination $Destination
 */
class CentralizationRule extends Shape
{
    /**
     * @param array{
     *     Source: CentralizationRuleSource,
     *     Destination: CentralizationRuleDestination
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
