<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\DisableCrl;

trait DisableCrlTrait
{
    /**
     * @param DisableCrlRequest $args
     * @return DisableCrlResponse
     */
    public function disableCrl(DisableCrlRequest $args)
    {
        $result = parent::disableCrl($args->toArray());
        return new DisableCrlResponse($result->toArray());
    }
}
