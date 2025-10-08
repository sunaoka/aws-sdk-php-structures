<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DeauthorizeConnection;

trait DeauthorizeConnectionTrait
{
    /**
     * @param DeauthorizeConnectionRequest $args
     * @return DeauthorizeConnectionResponse
     */
    public function deauthorizeConnection(DeauthorizeConnectionRequest $args)
    {
        $result = parent::deauthorizeConnection($args->toArray());
        return new DeauthorizeConnectionResponse($result->toArray());
    }
}
