<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteMetricCategory;

trait DeleteMetricCategoryTrait
{
    /**
     * @param DeleteMetricCategoryRequest $args
     * @return DeleteMetricCategoryResponse
     */
    public function deleteMetricCategory(DeleteMetricCategoryRequest $args)
    {
        $result = parent::deleteMetricCategory($args->toArray());
        return new DeleteMetricCategoryResponse($result->toArray());
    }
}
