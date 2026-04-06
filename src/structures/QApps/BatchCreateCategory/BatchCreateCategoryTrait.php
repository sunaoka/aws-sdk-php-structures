<?php

namespace Sunaoka\Aws\Structures\QApps\BatchCreateCategory;

trait BatchCreateCategoryTrait
{
    /**
     * @param BatchCreateCategoryRequest $args
     * @return void
     */
    public function batchCreateCategory(BatchCreateCategoryRequest $args)
    {
        parent::batchCreateCategory($args->toArray());
    }
}
