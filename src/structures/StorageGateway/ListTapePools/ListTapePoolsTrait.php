<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListTapePools;

trait ListTapePoolsTrait
{
    /**
     * @param ListTapePoolsRequest $args
     * @return ListTapePoolsResponse
     */
    public function listTapePools(ListTapePoolsRequest $args)
    {
        $result = parent::listTapePools($args->toArray());
        return new ListTapePoolsResponse($result->toArray());
    }
}
