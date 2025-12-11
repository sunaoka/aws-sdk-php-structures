<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StandardRouterOutputStreamDetails|null $Standard
 * @property MediaConnectFlowRouterOutputStreamDetails|null $MediaConnectFlow
 * @property MediaLiveInputRouterOutputStreamDetails|null $MediaLiveInput
 */
class RouterOutputStreamDetails extends Shape
{
    /**
     * @param array{
     *     Standard?: StandardRouterOutputStreamDetails|null,
     *     MediaConnectFlow?: MediaConnectFlowRouterOutputStreamDetails|null,
     *     MediaLiveInput?: MediaLiveInputRouterOutputStreamDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
