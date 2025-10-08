<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchive;

trait GetArchiveTrait
{
    /**
     * @param GetArchiveRequest $args
     * @return GetArchiveResponse
     */
    public function getArchive(GetArchiveRequest $args)
    {
        $result = parent::getArchive($args->toArray());
        return new GetArchiveResponse($result->toArray());
    }
}
