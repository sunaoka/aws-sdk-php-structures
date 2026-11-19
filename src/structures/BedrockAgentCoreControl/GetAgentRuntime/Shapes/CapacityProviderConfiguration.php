<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $capacityProviderArn
 * @property OperatingSystemConfiguration|null $operatingSystemConfiguration
 */
class CapacityProviderConfiguration extends Shape
{
    /**
     * @param array{
     *     capacityProviderArn: string,
     *     operatingSystemConfiguration?: OperatingSystemConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
