<?php

namespace Sunaoka\Aws\Structures\GameSparks\ListStages;

trait ListStagesTrait
{
    /**
     * @param ListStagesRequest $args
     * @return ListStagesResponse
     */
    public function listStages(ListStagesRequest $args)
    {
        $result = parent::listStages($args->toArray());
        return new ListStagesResponse($result->toArray());
    }
}
