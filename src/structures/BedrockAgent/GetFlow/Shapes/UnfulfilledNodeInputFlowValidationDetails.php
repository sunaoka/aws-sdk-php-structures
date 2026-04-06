<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $input
 * @property string $node
 */
class UnfulfilledNodeInputFlowValidationDetails extends Shape
{
    /**
     * @param array{
     *     input: string,
     *     node: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
