<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\ListConfigurationHistory;

trait ListConfigurationHistoryTrait
{
    /**
     * @param ListConfigurationHistoryRequest $args
     * @return ListConfigurationHistoryResponse
     */
    public function listConfigurationHistory(ListConfigurationHistoryRequest $args)
    {
        $result = parent::listConfigurationHistory($args->toArray());
        return new ListConfigurationHistoryResponse($result->toArray());
    }
}
