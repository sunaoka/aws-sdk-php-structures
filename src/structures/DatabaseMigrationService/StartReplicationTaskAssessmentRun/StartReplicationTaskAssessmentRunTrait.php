<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartReplicationTaskAssessmentRun;

trait StartReplicationTaskAssessmentRunTrait
{
    /**
     * @param StartReplicationTaskAssessmentRunRequest $args
     * @return StartReplicationTaskAssessmentRunResponse
     */
    public function startReplicationTaskAssessmentRun(StartReplicationTaskAssessmentRunRequest $args)
    {
        $result = parent::startReplicationTaskAssessmentRun($args->toArray());
        return new StartReplicationTaskAssessmentRunResponse($result->toArray());
    }
}
