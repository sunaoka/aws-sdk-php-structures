<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $percentTraffic
 * @property array<string, string> $stageVariableOverrides
 * @property bool $useStageCache
 */
class DeploymentCanarySettings extends Shape
{
    /**
     * @param array{
     *     percentTraffic?: double,
     *     stageVariableOverrides?: array<string, string>,
     *     useStageCache?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
