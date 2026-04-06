<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateRelay;

trait UpdateRelayTrait
{
    /**
     * @param UpdateRelayRequest $args
     * @return UpdateRelayResponse
     */
    public function updateRelay(UpdateRelayRequest $args)
    {
        $result = parent::updateRelay($args->toArray());
        return new UpdateRelayResponse($result->toArray());
    }
}
