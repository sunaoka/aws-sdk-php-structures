<?php

namespace Sunaoka\Aws\Structures\QApps\BatchUpdateCategory;

trait BatchUpdateCategoryTrait
{
    /**
     * @param BatchUpdateCategoryRequest $args
     * @return void
     */
    public function batchUpdateCategory(BatchUpdateCategoryRequest $args)
    {
        parent::batchUpdateCategory($args->toArray());
    }
}
