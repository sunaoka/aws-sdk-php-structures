<?php

namespace Sunaoka\Aws\Structures\Ses\ListConfigurationSets;

trait ListConfigurationSetsTrait
{
    /**
     * @param ListConfigurationSetsRequest $args
     * @return ListConfigurationSetsResponse
     */
    public function listConfigurationSets(ListConfigurationSetsRequest $args)
    {
        $result = parent::listConfigurationSets($args->toArray());
        return new ListConfigurationSetsResponse($result->toArray());
    }
}
