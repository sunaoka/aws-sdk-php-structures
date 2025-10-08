<?php

namespace Sunaoka\Aws\Structures\mgn\MarkAsArchived;

trait MarkAsArchivedTrait
{
    /**
     * @param MarkAsArchivedRequest $args
     * @return MarkAsArchivedResponse
     */
    public function markAsArchived(MarkAsArchivedRequest $args)
    {
        $result = parent::markAsArchived($args->toArray());
        return new MarkAsArchivedResponse($result->toArray());
    }
}
