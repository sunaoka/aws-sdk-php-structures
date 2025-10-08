<?php

namespace Sunaoka\Aws\Structures\kendra\DeleteIndex;

trait DeleteIndexTrait
{
    /**
     * @param DeleteIndexRequest $args
     * @return void
     */
    public function deleteIndex(DeleteIndexRequest $args)
    {
        parent::deleteIndex($args->toArray());
    }
}
