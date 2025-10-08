<?php

namespace Sunaoka\Aws\Structures\DirectConnect\UpdateConnection;

trait UpdateConnectionTrait
{
    /**
     * @param UpdateConnectionRequest $args
     * @return UpdateConnectionResponse
     */
    public function updateConnection(UpdateConnectionRequest $args)
    {
        $result = parent::updateConnection($args->toArray());
        return new UpdateConnectionResponse($result->toArray());
    }
}
