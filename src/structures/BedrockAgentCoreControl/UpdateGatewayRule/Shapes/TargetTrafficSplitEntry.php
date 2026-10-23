<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetName
 * @property string|null $model
 * @property Fallback|null $fallback
 * @property string $name
 * @property int<1, 99> $weight
 * @property string|null $description
 * @property array<string, string>|null $metadata
 */
class TargetTrafficSplitEntry extends Shape
{
    /**
     * @param array{
     *     targetName: string,
     *     model?: string|null,
     *     fallback?: Fallback|null,
     *     name: string,
     *     weight: int<1, 99>,
     *     description?: string|null,
     *     metadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
