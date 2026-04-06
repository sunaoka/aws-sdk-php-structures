<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\DescribePlacement;

trait DescribePlacementTrait
{
    /**
     * @param DescribePlacementRequest $args
     * @return DescribePlacementResponse
     */
    public function describePlacement(DescribePlacementRequest $args)
    {
        $result = parent::describePlacement($args->toArray());
        return new DescribePlacementResponse($result->toArray());
    }
}
