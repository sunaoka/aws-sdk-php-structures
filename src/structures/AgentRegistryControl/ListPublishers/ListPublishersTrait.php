<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\ListPublishers;

trait ListPublishersTrait
{
    /**
     * @param ListPublishersRequest $args
     * @return ListPublishersResponse
     */
    public function listPublishers(ListPublishersRequest $args)
    {
        $result = parent::listPublishers($args->toArray());
        return new ListPublishersResponse($result->toArray());
    }
}
