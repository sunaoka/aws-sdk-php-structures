<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $source
 * @property string $target
 */
class DuplicateConnectionsFlowValidationDetails extends Shape
{
    /**
     * @param array{
     *     source: string,
     *     target: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
