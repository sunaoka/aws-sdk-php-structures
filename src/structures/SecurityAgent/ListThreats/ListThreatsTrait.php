<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListThreats;

trait ListThreatsTrait
{
    /**
     * @param ListThreatsRequest $args
     * @return ListThreatsResponse
     */
    public function listThreats(ListThreatsRequest $args)
    {
        $result = parent::listThreats($args->toArray());
        return new ListThreatsResponse($result->toArray());
    }
}
