<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeregisterFromWorkMail;

trait DeregisterFromWorkMailTrait
{
    /**
     * @param DeregisterFromWorkMailRequest $args
     * @return DeregisterFromWorkMailResponse
     */
    public function deregisterFromWorkMail(DeregisterFromWorkMailRequest $args)
    {
        $result = parent::deregisterFromWorkMail($args->toArray());
        return new DeregisterFromWorkMailResponse($result->toArray());
    }
}
