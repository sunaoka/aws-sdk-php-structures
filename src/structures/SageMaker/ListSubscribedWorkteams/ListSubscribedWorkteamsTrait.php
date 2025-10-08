<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListSubscribedWorkteams;

trait ListSubscribedWorkteamsTrait
{
    /**
     * @param ListSubscribedWorkteamsRequest $args
     * @return ListSubscribedWorkteamsResponse
     */
    public function listSubscribedWorkteams(ListSubscribedWorkteamsRequest $args)
    {
        $result = parent::listSubscribedWorkteams($args->toArray());
        return new ListSubscribedWorkteamsResponse($result->toArray());
    }
}
