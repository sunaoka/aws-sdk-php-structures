<?php

namespace Sunaoka\Aws\Structures\Inspector\StopAssessmentRun;

trait StopAssessmentRunTrait
{
    /**
     * @param StopAssessmentRunRequest $args
     * @return void
     */
    public function stopAssessmentRun(StopAssessmentRunRequest $args)
    {
        parent::stopAssessmentRun($args->toArray());
    }
}
