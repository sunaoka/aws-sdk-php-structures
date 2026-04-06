<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StandardRouterOutputConfiguration|null $Standard
 * @property MediaConnectFlowRouterOutputConfiguration|null $MediaConnectFlow
 * @property MediaLiveInputRouterOutputConfiguration|null $MediaLiveInput
 */
class RouterOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     Standard?: StandardRouterOutputConfiguration|null,
     *     MediaConnectFlow?: MediaConnectFlowRouterOutputConfiguration|null,
     *     MediaLiveInput?: MediaLiveInputRouterOutputConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
