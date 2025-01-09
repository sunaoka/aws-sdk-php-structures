<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlowConnectionConfiguration $configuration
 * @property string $name
 * @property string $source
 * @property string $target
 * @property 'Data'|'Conditional' $type
 */
class FlowConnection extends Shape
{
    /**
     * @param array{
     *     configuration?: FlowConnectionConfiguration,
     *     name: string,
     *     source: string,
     *     target: string,
     *     type: 'Data'|'Conditional'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
