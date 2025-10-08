<?php

namespace Sunaoka\Aws\Structures\Account\GetPrimaryEmail;

trait GetPrimaryEmailTrait
{
    /**
     * @param GetPrimaryEmailRequest $args
     * @return GetPrimaryEmailResponse
     */
    public function getPrimaryEmail(GetPrimaryEmailRequest $args)
    {
        $result = parent::getPrimaryEmail($args->toArray());
        return new GetPrimaryEmailResponse($result->toArray());
    }
}
