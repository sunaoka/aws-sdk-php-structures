<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListTapes;

trait ListTapesTrait
{
    /**
     * @param ListTapesRequest $args
     * @return ListTapesResponse
     */
    public function listTapes(ListTapesRequest $args)
    {
        $result = parent::listTapes($args->toArray());
        return new ListTapesResponse($result->toArray());
    }
}
