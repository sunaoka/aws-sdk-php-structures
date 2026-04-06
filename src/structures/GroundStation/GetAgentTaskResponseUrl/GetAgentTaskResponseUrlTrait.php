<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetAgentTaskResponseUrl;

trait GetAgentTaskResponseUrlTrait
{
    /**
     * @param GetAgentTaskResponseUrlRequest $args
     * @return GetAgentTaskResponseUrlResponse
     */
    public function getAgentTaskResponseUrl(GetAgentTaskResponseUrlRequest $args)
    {
        $result = parent::getAgentTaskResponseUrl($args->toArray());
        return new GetAgentTaskResponseUrlResponse($result->toArray());
    }
}
