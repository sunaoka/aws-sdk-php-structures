<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\StartPracticeRun;

trait StartPracticeRunTrait
{
    /**
     * @param StartPracticeRunRequest $args
     * @return StartPracticeRunResponse
     */
    public function startPracticeRun(StartPracticeRunRequest $args)
    {
        $result = parent::startPracticeRun($args->toArray());
        return new StartPracticeRunResponse($result->toArray());
    }
}
