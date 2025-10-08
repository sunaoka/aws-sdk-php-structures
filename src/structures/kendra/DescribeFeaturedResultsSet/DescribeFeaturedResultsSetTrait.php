<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeFeaturedResultsSet;

trait DescribeFeaturedResultsSetTrait
{
    /**
     * @param DescribeFeaturedResultsSetRequest $args
     * @return DescribeFeaturedResultsSetResponse
     */
    public function describeFeaturedResultsSet(DescribeFeaturedResultsSetRequest $args)
    {
        $result = parent::describeFeaturedResultsSet($args->toArray());
        return new DescribeFeaturedResultsSetResponse($result->toArray());
    }
}
