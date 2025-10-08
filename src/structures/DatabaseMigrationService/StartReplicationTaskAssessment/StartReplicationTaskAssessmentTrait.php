<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartReplicationTaskAssessment;

trait StartReplicationTaskAssessmentTrait
{
    /**
     * @param StartReplicationTaskAssessmentRequest $args
     * @return StartReplicationTaskAssessmentResponse
     */
    public function startReplicationTaskAssessment(StartReplicationTaskAssessmentRequest $args)
    {
        $result = parent::startReplicationTaskAssessment($args->toArray());
        return new StartReplicationTaskAssessmentResponse($result->toArray());
    }
}
