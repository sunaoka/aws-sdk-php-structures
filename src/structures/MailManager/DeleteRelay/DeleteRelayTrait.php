<?php

namespace Sunaoka\Aws\Structures\MailManager\DeleteRelay;

trait DeleteRelayTrait
{
    /**
     * @param DeleteRelayRequest $args
     * @return DeleteRelayResponse
     */
    public function deleteRelay(DeleteRelayRequest $args)
    {
        $result = parent::deleteRelay($args->toArray());
        return new DeleteRelayResponse($result->toArray());
    }
}
