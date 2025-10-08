<?php

namespace Sunaoka\Aws\Structures\mgn\ArchiveApplication;

trait ArchiveApplicationTrait
{
    /**
     * @param ArchiveApplicationRequest $args
     * @return ArchiveApplicationResponse
     */
    public function archiveApplication(ArchiveApplicationRequest $args)
    {
        $result = parent::archiveApplication($args->toArray());
        return new ArchiveApplicationResponse($result->toArray());
    }
}
