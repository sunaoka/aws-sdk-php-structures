<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlowAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100>|null $maxConcurrency
 * @property 'Automatic'|'Manual' $type
 */
class FlowAliasConcurrencyConfiguration extends Shape
{
    /**
     * @param array{
     *     maxConcurrency?: int<1, 100>|null,
     *     type: 'Automatic'|'Manual'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
