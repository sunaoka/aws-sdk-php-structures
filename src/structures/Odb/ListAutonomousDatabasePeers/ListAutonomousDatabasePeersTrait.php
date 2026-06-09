<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousDatabasePeers;

trait ListAutonomousDatabasePeersTrait
{
    /**
     * @param ListAutonomousDatabasePeersRequest $args
     * @return ListAutonomousDatabasePeersResponse
     */
    public function listAutonomousDatabasePeers(ListAutonomousDatabasePeersRequest $args)
    {
        $result = parent::listAutonomousDatabasePeers($args->toArray());
        return new ListAutonomousDatabasePeersResponse($result->toArray());
    }
}
