<?php

namespace Sunaoka\Aws\Structures\OpsWorks\GrantAccess;

trait GrantAccessTrait
{
    /**
     * @param GrantAccessRequest $args
     * @return GrantAccessResponse
     */
    public function grantAccess(GrantAccessRequest $args)
    {
        $result = parent::grantAccess($args->toArray());
        return new GrantAccessResponse($result->toArray());
    }
}
