<?php

namespace Sunaoka\Aws\Structures\Organizations\ListCreateAccountStatus;

trait ListCreateAccountStatusTrait
{
    /**
     * @param ListCreateAccountStatusRequest $args
     * @return ListCreateAccountStatusResponse
     */
    public function listCreateAccountStatus(ListCreateAccountStatusRequest $args)
    {
        $result = parent::listCreateAccountStatus($args->toArray());
        return new ListCreateAccountStatusResponse($result->toArray());
    }
}
