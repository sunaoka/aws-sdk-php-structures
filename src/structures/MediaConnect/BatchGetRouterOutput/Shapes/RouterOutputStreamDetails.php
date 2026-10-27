<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StandardRouterOutputStreamDetails|null $Standard
 * @property MediaConnectFlowRouterOutputStreamDetails|null $MediaConnectFlow
 * @property MediaLiveInputRouterOutputStreamDetails|null $MediaLiveInput
 * @property SourceEndpointRouterOutputStreamDetails|null $SourceEndpoint
 */
class RouterOutputStreamDetails extends Shape
{
    /**
     * @param array{
     *     Standard?: StandardRouterOutputStreamDetails|null,
     *     MediaConnectFlow?: MediaConnectFlowRouterOutputStreamDetails|null,
     *     MediaLiveInput?: MediaLiveInputRouterOutputStreamDetails|null,
     *     SourceEndpoint?: SourceEndpointRouterOutputStreamDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
