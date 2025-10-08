<?php

namespace Sunaoka\Aws\Structures\Personalize\UpdateSolution;

trait UpdateSolutionTrait
{
    /**
     * @param UpdateSolutionRequest $args
     * @return UpdateSolutionResponse
     */
    public function updateSolution(UpdateSolutionRequest $args)
    {
        $result = parent::updateSolution($args->toArray());
        return new UpdateSolutionResponse($result->toArray());
    }
}
