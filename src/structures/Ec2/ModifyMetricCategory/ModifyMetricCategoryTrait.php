<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyMetricCategory;

trait ModifyMetricCategoryTrait
{
    /**
     * @param ModifyMetricCategoryRequest $args
     * @return ModifyMetricCategoryResponse
     */
    public function modifyMetricCategory(ModifyMetricCategoryRequest $args)
    {
        $result = parent::modifyMetricCategory($args->toArray());
        return new ModifyMetricCategoryResponse($result->toArray());
    }
}
