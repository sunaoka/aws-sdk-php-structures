<?php

namespace Sunaoka\Aws\Structures\QApps\BatchDeleteCategory;

trait BatchDeleteCategoryTrait
{
    /**
     * @param BatchDeleteCategoryRequest $args
     * @return void
     */
    public function batchDeleteCategory(BatchDeleteCategoryRequest $args)
    {
        parent::batchDeleteCategory($args->toArray());
    }
}
