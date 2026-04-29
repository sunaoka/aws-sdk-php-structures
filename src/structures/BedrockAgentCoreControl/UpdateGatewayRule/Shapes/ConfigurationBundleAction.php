<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StaticOverride|null $staticOverride
 * @property WeightedOverride|null $weightedOverride
 */
class ConfigurationBundleAction extends Shape
{
    /**
     * @param array{
     *     staticOverride?: StaticOverride|null,
     *     weightedOverride?: WeightedOverride|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
