<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\ListAppInstanceAdmins;

trait ListAppInstanceAdminsTrait
{
    /**
     * @param ListAppInstanceAdminsRequest $args
     * @return ListAppInstanceAdminsResponse
     */
    public function listAppInstanceAdmins(ListAppInstanceAdminsRequest $args)
    {
        $result = parent::listAppInstanceAdmins($args->toArray());
        return new ListAppInstanceAdminsResponse($result->toArray());
    }
}
