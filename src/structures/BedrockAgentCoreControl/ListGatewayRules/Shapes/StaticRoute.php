<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListGatewayRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetName
 * @property string|null $model
 * @property Fallback|null $fallback
 */
class StaticRoute extends Shape
{
    /**
     * @param array{
     *     targetName: string,
     *     model?: string|null,
     *     fallback?: Fallback|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
