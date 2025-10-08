<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteReplicationTaskAssessmentRun;

trait DeleteReplicationTaskAssessmentRunTrait
{
    /**
     * @param DeleteReplicationTaskAssessmentRunRequest $args
     * @return DeleteReplicationTaskAssessmentRunResponse
     */
    public function deleteReplicationTaskAssessmentRun(DeleteReplicationTaskAssessmentRunRequest $args)
    {
        $result = parent::deleteReplicationTaskAssessmentRun($args->toArray());
        return new DeleteReplicationTaskAssessmentRunResponse($result->toArray());
    }
}
