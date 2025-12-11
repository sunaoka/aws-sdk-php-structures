<?php

namespace Sunaoka\Aws\Structures\Ec2\GetImageAncestry;

trait GetImageAncestryTrait
{
    /**
     * @param GetImageAncestryRequest $args
     * @return GetImageAncestryResponse
     */
    public function getImageAncestry(GetImageAncestryRequest $args)
    {
        $result = parent::getImageAncestry($args->toArray());
        return new GetImageAncestryResponse($result->toArray());
    }
}
