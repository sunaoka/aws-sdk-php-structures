<?php

namespace Sunaoka\Aws\Structures\FMS\GetProtocolsList;

trait GetProtocolsListTrait
{
    /**
     * @param GetProtocolsListRequest $args
     * @return GetProtocolsListResponse
     */
    public function getProtocolsList(GetProtocolsListRequest $args)
    {
        $result = parent::getProtocolsList($args->toArray());
        return new GetProtocolsListResponse($result->toArray());
    }
}
