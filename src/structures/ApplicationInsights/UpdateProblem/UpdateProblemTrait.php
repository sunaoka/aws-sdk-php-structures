<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\UpdateProblem;

trait UpdateProblemTrait
{
    /**
     * @param UpdateProblemRequest $args
     * @return UpdateProblemResponse
     */
    public function updateProblem(UpdateProblemRequest $args)
    {
        $result = parent::updateProblem($args->toArray());
        return new UpdateProblemResponse($result->toArray());
    }
}
