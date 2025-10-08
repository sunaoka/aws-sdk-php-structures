<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeBrandPublishedVersion;

trait DescribeBrandPublishedVersionTrait
{
    /**
     * @param DescribeBrandPublishedVersionRequest $args
     * @return DescribeBrandPublishedVersionResponse
     */
    public function describeBrandPublishedVersion(DescribeBrandPublishedVersionRequest $args)
    {
        $result = parent::describeBrandPublishedVersion($args->toArray());
        return new DescribeBrandPublishedVersionResponse($result->toArray());
    }
}
