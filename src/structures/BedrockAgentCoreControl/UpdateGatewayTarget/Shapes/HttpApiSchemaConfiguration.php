<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ApiSchemaConfiguration $source
 */
class HttpApiSchemaConfiguration extends Shape
{
    /**
     * @param array{source: ApiSchemaConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
