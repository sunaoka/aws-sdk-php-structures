<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int<1, 99> $weight
 * @property string $targetName
 * @property string|null $description
 * @property array<string, string>|null $metadata
 */
class TargetTrafficSplitEntry extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     weight: int<1, 99>,
     *     targetName: string,
     *     description?: string|null,
     *     metadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
