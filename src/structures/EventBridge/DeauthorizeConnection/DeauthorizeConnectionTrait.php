<?php

namespace Sunaoka\Aws\Structures\EventBridge\DeauthorizeConnection;

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
