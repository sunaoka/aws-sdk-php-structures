<?php

namespace Sunaoka\Aws\Structures\MarketplaceCommerceAnalytics\GenerateDataSet;

trait GenerateDataSetTrait
{
    /**
     * @param GenerateDataSetRequest $args
     * @return GenerateDataSetResponse
     */
    public function generateDataSet(GenerateDataSetRequest $args)
    {
        $result = parent::generateDataSet($args->toArray());
        return new GenerateDataSetResponse($result->toArray());
    }
}
