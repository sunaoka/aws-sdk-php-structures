<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceImageInstanceTypeSpecification;

trait ReplaceImageInstanceTypeSpecificationTrait
{
    /**
     * @param ReplaceImageInstanceTypeSpecificationRequest $args
     * @return ReplaceImageInstanceTypeSpecificationResponse
     */
    public function replaceImageInstanceTypeSpecification(ReplaceImageInstanceTypeSpecificationRequest $args)
    {
        $result = parent::replaceImageInstanceTypeSpecification($args->toArray());
        return new ReplaceImageInstanceTypeSpecificationResponse($result->toArray());
    }
}
