<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameSessionPlacement;

trait DescribeGameSessionPlacementTrait
{
    /**
     * @param DescribeGameSessionPlacementRequest $args
     * @return DescribeGameSessionPlacementResponse
     */
    public function describeGameSessionPlacement(DescribeGameSessionPlacementRequest $args)
    {
        $result = parent::describeGameSessionPlacement($args->toArray());
        return new DescribeGameSessionPlacementResponse($result->toArray());
    }
}
