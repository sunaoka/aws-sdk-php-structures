<?php

namespace Sunaoka\Aws\Structures\Kafka\ListConfigurationRevisions;

trait ListConfigurationRevisionsTrait
{
    /**
     * @param ListConfigurationRevisionsRequest $args
     * @return ListConfigurationRevisionsResponse
     */
    public function listConfigurationRevisions(ListConfigurationRevisionsRequest $args)
    {
        $result = parent::listConfigurationRevisions($args->toArray());
        return new ListConfigurationRevisionsResponse($result->toArray());
    }
}
