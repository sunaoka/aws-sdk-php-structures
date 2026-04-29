<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListGatewayRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConfigurationBundleAction|null $configurationBundle
 * @property RouteToTargetAction|null $routeToTarget
 */
class Action extends Shape
{
    /**
     * @param array{
     *     configurationBundle?: ConfigurationBundleAction|null,
     *     routeToTarget?: RouteToTargetAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
