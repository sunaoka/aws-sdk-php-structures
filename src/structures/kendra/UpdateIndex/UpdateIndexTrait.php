<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateIndex;

trait UpdateIndexTrait
{
    /**
     * @param UpdateIndexRequest $args
     * @return void
     */
    public function updateIndex(UpdateIndexRequest $args)
    {
        parent::updateIndex($args->toArray());
    }
}
