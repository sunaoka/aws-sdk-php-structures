<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListWorkteams;

trait ListWorkteamsTrait
{
    /**
     * @param ListWorkteamsRequest $args
     * @return ListWorkteamsResponse
     */
    public function listWorkteams(ListWorkteamsRequest $args)
    {
        $result = parent::listWorkteams($args->toArray());
        return new ListWorkteamsResponse($result->toArray());
    }
}
