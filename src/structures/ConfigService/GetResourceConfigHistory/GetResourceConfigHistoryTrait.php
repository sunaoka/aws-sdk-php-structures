<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetResourceConfigHistory;

trait GetResourceConfigHistoryTrait
{
    /**
     * @param GetResourceConfigHistoryRequest $args
     * @return GetResourceConfigHistoryResponse
     */
    public function getResourceConfigHistory(GetResourceConfigHistoryRequest $args)
    {
        $result = parent::getResourceConfigHistory($args->toArray());
        return new GetResourceConfigHistoryResponse($result->toArray());
    }
}
