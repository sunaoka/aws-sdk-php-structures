<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\ListAssistants;

trait ListAssistantsTrait
{
    /**
     * @param ListAssistantsRequest $args
     * @return ListAssistantsResponse
     */
    public function listAssistants(ListAssistantsRequest $args)
    {
        $result = parent::listAssistants($args->toArray());
        return new ListAssistantsResponse($result->toArray());
    }
}
