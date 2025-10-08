<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CancelReplicationTaskAssessmentRun;

trait CancelReplicationTaskAssessmentRunTrait
{
    /**
     * @param CancelReplicationTaskAssessmentRunRequest $args
     * @return CancelReplicationTaskAssessmentRunResponse
     */
    public function cancelReplicationTaskAssessmentRun(CancelReplicationTaskAssessmentRunRequest $args)
    {
        $result = parent::cancelReplicationTaskAssessmentRun($args->toArray());
        return new CancelReplicationTaskAssessmentRunResponse($result->toArray());
    }
}
