<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\CreateABTest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int<1, 100> $weight
 * @property VariantConfiguration $variantConfiguration
 */
class Variant extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     weight: int<1, 100>,
     *     variantConfiguration: VariantConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
