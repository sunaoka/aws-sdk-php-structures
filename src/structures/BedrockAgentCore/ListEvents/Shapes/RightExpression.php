<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MetadataValue|null $metadataValue
 */
class RightExpression extends Shape
{
    /**
     * @param array{metadataValue?: MetadataValue|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
