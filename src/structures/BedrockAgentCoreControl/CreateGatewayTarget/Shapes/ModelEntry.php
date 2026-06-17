<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $model
 */
class ModelEntry extends Shape
{
    /**
     * @param array{model: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
