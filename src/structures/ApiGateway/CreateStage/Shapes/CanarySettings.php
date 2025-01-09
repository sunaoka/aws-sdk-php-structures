<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $percentTraffic
 * @property string $deploymentId
 * @property array<string, string> $stageVariableOverrides
 * @property bool $useStageCache
 */
class CanarySettings extends Shape
{
    /**
     * @param array{
     *     percentTraffic?: double,
     *     deploymentId?: string,
     *     stageVariableOverrides?: array<string, string>,
     *     useStageCache?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
