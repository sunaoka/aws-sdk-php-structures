<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateMetricCategory;

trait CreateMetricCategoryTrait
{
    /**
     * @param CreateMetricCategoryRequest $args
     * @return CreateMetricCategoryResponse
     */
    public function createMetricCategory(CreateMetricCategoryRequest $args)
    {
        $result = parent::createMetricCategory($args->toArray());
        return new CreateMetricCategoryResponse($result->toArray());
    }
}
