<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int<1, 99> $weight
 * @property ConfigurationBundleReference $configurationBundle
 * @property string|null $description
 * @property array<string, string>|null $metadata
 */
class TrafficSplitEntry extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     weight: int<1, 99>,
     *     configurationBundle: ConfigurationBundleReference,
     *     description?: string|null,
     *     metadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
