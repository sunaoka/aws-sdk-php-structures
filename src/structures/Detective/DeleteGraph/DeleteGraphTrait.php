<?php

namespace Sunaoka\Aws\Structures\Detective\DeleteGraph;

trait DeleteGraphTrait
{
    /**
     * @param DeleteGraphRequest $args
     * @return void
     */
    public function deleteGraph(DeleteGraphRequest $args)
    {
        parent::deleteGraph($args->toArray());
    }
}
