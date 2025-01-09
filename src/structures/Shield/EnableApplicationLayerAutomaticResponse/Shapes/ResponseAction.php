<?php

namespace Sunaoka\Aws\Structures\Shield\EnableApplicationLayerAutomaticResponse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BlockAction $Block
 * @property CountAction $Count
 */
class ResponseAction extends Shape
{
    /**
     * @param array{
     *     Block?: BlockAction,
     *     Count?: CountAction
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
