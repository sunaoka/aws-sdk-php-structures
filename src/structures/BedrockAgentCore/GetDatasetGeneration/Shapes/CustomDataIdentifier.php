<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetDatasetGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $regex
 */
class CustomDataIdentifier extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     regex: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
