<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeExperience;

trait DescribeExperienceTrait
{
    /**
     * @param DescribeExperienceRequest $args
     * @return DescribeExperienceResponse
     */
    public function describeExperience(DescribeExperienceRequest $args)
    {
        $result = parent::describeExperience($args->toArray());
        return new DescribeExperienceResponse($result->toArray());
    }
}
