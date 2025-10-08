<?php

namespace Sunaoka\Aws\Structures\Personalize\DeleteSolution;

trait DeleteSolutionTrait
{
    /**
     * @param DeleteSolutionRequest $args
     * @return void
     */
    public function deleteSolution(DeleteSolutionRequest $args)
    {
        parent::deleteSolution($args->toArray());
    }
}
