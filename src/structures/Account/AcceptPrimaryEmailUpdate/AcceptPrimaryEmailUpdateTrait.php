<?php

namespace Sunaoka\Aws\Structures\Account\AcceptPrimaryEmailUpdate;

trait AcceptPrimaryEmailUpdateTrait
{
    /**
     * @param AcceptPrimaryEmailUpdateRequest $args
     * @return AcceptPrimaryEmailUpdateResponse
     */
    public function acceptPrimaryEmailUpdate(AcceptPrimaryEmailUpdateRequest $args)
    {
        $result = parent::acceptPrimaryEmailUpdate($args->toArray());
        return new AcceptPrimaryEmailUpdateResponse($result->toArray());
    }
}
