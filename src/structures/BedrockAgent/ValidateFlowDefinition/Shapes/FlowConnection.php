<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Data'|'Conditional' $type
 * @property string $name
 * @property string $source
 * @property string $target
 * @property FlowConnectionConfiguration|null $configuration
 */
class FlowConnection extends Shape
{
    /**
     * @param array{
     *     type: 'Data'|'Conditional',
     *     name: string,
     *     source: string,
     *     target: string,
     *     configuration?: FlowConnectionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
