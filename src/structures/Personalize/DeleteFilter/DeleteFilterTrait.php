<?php

namespace Sunaoka\Aws\Structures\Personalize\DeleteFilter;

trait DeleteFilterTrait
{
    /**
     * @param DeleteFilterRequest $args
     * @return void
     */
    public function deleteFilter(DeleteFilterRequest $args)
    {
        parent::deleteFilter($args->toArray());
    }
}
