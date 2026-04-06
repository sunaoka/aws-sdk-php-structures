<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Automatic'|'Manual' $type
 * @property int<1, 100>|null $maxConcurrency
 */
class FlowAliasConcurrencyConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 'Automatic'|'Manual',
     *     maxConcurrency?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
