<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeCopyProductStatus;

trait DescribeCopyProductStatusTrait
{
    /**
     * @param DescribeCopyProductStatusRequest $args
     * @return DescribeCopyProductStatusResponse
     */
    public function describeCopyProductStatus(DescribeCopyProductStatusRequest $args)
    {
        $result = parent::describeCopyProductStatus($args->toArray());
        return new DescribeCopyProductStatusResponse($result->toArray());
    }
}
