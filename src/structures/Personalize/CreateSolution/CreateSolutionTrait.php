<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateSolution;

trait CreateSolutionTrait
{
    /**
     * @param CreateSolutionRequest $args
     * @return CreateSolutionResponse
     */
    public function createSolution(CreateSolutionRequest $args)
    {
        $result = parent::createSolution($args->toArray());
        return new CreateSolutionResponse($result->toArray());
    }
}
