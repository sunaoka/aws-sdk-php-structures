<?php

namespace Sunaoka\Aws\Structures\Glacier\DeleteArchive;

trait DeleteArchiveTrait
{
    /**
     * @param DeleteArchiveRequest $args
     * @return void
     */
    public function deleteArchive(DeleteArchiveRequest $args)
    {
        parent::deleteArchive($args->toArray());
    }
}
