<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $percentTraffic
 * @property string|null $deploymentId
 * @property array<string, string>|null $stageVariableOverrides
 * @property bool|null $useStageCache
 */
class CanarySettings extends Shape
{
    /**
     * @param array{
     *     percentTraffic?: double|null,
     *     deploymentId?: string|null,
     *     stageVariableOverrides?: array<string, string>|null,
     *     useStageCache?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
