<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $percentTraffic
 * @property array<string, string>|null $stageVariableOverrides
 * @property bool|null $useStageCache
 */
class DeploymentCanarySettings extends Shape
{
    /**
     * @param array{
     *     percentTraffic?: double|null,
     *     stageVariableOverrides?: array<string, string>|null,
     *     useStageCache?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
