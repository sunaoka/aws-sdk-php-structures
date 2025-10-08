<?php

namespace Sunaoka\Aws\Structures\GroundStation\ReserveContact;

trait ReserveContactTrait
{
    /**
     * @param ReserveContactRequest $args
     * @return ReserveContactResponse
     */
    public function reserveContact(ReserveContactRequest $args)
    {
        $result = parent::reserveContact($args->toArray());
        return new ReserveContactResponse($result->toArray());
    }
}
