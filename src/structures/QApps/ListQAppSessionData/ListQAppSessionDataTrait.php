<?php

namespace Sunaoka\Aws\Structures\QApps\ListQAppSessionData;

trait ListQAppSessionDataTrait
{
    /**
     * @param ListQAppSessionDataRequest $args
     * @return ListQAppSessionDataResponse
     */
    public function listQAppSessionData(ListQAppSessionDataRequest $args)
    {
        $result = parent::listQAppSessionData($args->toArray());
        return new ListQAppSessionDataResponse($result->toArray());
    }
}
