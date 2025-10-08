<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListBridges;

trait ListBridgesTrait
{
    /**
     * @param ListBridgesRequest $args
     * @return ListBridgesResponse
     */
    public function listBridges(ListBridgesRequest $args)
    {
        $result = parent::listBridges($args->toArray());
        return new ListBridgesResponse($result->toArray());
    }
}
