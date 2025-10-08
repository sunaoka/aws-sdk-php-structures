<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ArchiveFindings;

trait ArchiveFindingsTrait
{
    /**
     * @param ArchiveFindingsRequest $args
     * @return ArchiveFindingsResponse
     */
    public function archiveFindings(ArchiveFindingsRequest $args)
    {
        $result = parent::archiveFindings($args->toArray());
        return new ArchiveFindingsResponse($result->toArray());
    }
}
