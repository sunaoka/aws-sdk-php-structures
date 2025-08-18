<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $node
 * @property string $input
 */
class UnfulfilledNodeInputFlowValidationDetails extends Shape
{
    /**
     * @param array{
     *     node: string,
     *     input: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
