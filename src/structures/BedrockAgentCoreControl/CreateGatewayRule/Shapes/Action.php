<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGatewayRule\Shapes;

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
