<?php

namespace Sunaoka\Aws\Structures\FMS\PutProtocolsList;

trait PutProtocolsListTrait
{
    /**
     * @param PutProtocolsListRequest $args
     * @return PutProtocolsListResponse
     */
    public function putProtocolsList(PutProtocolsListRequest $args)
    {
        $result = parent::putProtocolsList($args->toArray());
        return new PutProtocolsListResponse($result->toArray());
    }
}
