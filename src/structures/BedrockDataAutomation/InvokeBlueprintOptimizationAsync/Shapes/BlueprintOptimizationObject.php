<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\InvokeBlueprintOptimizationAsync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $blueprintArn
 * @property 'DEVELOPMENT'|'LIVE'|null $stage
 */
class BlueprintOptimizationObject extends Shape
{
    /**
     * @param array{
     *     blueprintArn: string,
     *     stage?: 'DEVELOPMENT'|'LIVE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
