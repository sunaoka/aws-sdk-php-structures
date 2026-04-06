<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connection
 * @property string $source
 * @property string $target
 */
class InvalidLoopBoundaryFlowValidationDetails extends Shape
{
    /**
     * @param array{
     *     connection: string,
     *     source: string,
     *     target: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
