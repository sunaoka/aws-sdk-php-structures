<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetABTest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConfigurationBundleRef|null $configurationBundle
 * @property TargetRef|null $target
 */
class VariantConfiguration extends Shape
{
    /**
     * @param array{
     *     configurationBundle?: ConfigurationBundleRef|null,
     *     target?: TargetRef|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
