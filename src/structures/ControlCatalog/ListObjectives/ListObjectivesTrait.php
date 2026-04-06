<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListObjectives;

trait ListObjectivesTrait
{
    /**
     * @param ListObjectivesRequest $args
     * @return ListObjectivesResponse
     */
    public function listObjectives(ListObjectivesRequest $args)
    {
        $result = parent::listObjectives($args->toArray());
        return new ListObjectivesResponse($result->toArray());
    }
}
