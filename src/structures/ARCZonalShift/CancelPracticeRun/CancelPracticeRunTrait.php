<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\CancelPracticeRun;

trait CancelPracticeRunTrait
{
    /**
     * @param CancelPracticeRunRequest $args
     * @return CancelPracticeRunResponse
     */
    public function cancelPracticeRun(CancelPracticeRunRequest $args)
    {
        $result = parent::cancelPracticeRun($args->toArray());
        return new CancelPracticeRunResponse($result->toArray());
    }
}
