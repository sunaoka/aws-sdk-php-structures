<?php

namespace Sunaoka\Aws\Structures\DataExchange\DeleteRevision;

trait DeleteRevisionTrait
{
    /**
     * @param DeleteRevisionRequest $args
     * @return void
     */
    public function deleteRevision(DeleteRevisionRequest $args)
    {
        parent::deleteRevision($args->toArray());
    }
}
