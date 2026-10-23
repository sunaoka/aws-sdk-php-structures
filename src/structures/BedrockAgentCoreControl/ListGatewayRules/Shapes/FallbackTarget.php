<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListGatewayRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetName
 * @property string|null $model
 * @property FallbackTriggers|null $triggerOn
 * @property int<50, 900000>|null $firstByteTimeoutMilliseconds
 */
class FallbackTarget extends Shape
{
    /**
     * @param array{
     *     targetName: string,
     *     model?: string|null,
     *     triggerOn?: FallbackTriggers|null,
     *     firstByteTimeoutMilliseconds?: int<50, 900000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
