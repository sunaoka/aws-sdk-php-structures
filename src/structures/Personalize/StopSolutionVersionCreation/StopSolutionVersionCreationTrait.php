<?php

namespace Sunaoka\Aws\Structures\Personalize\StopSolutionVersionCreation;

trait StopSolutionVersionCreationTrait
{
    /**
     * @param StopSolutionVersionCreationRequest $args
     * @return void
     */
    public function stopSolutionVersionCreation(StopSolutionVersionCreationRequest $args)
    {
        parent::stopSolutionVersionCreation($args->toArray());
    }
}
