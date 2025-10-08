<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\DeleteHost;

trait DeleteHostTrait
{
    /**
     * @param DeleteHostRequest $args
     * @return DeleteHostResponse
     */
    public function deleteHost(DeleteHostRequest $args)
    {
        $result = parent::deleteHost($args->toArray());
        return new DeleteHostResponse($result->toArray());
    }
}
