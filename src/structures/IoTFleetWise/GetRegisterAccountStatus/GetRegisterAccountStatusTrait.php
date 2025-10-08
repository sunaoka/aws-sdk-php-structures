<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetRegisterAccountStatus;

trait GetRegisterAccountStatusTrait
{
    /**
     * @param GetRegisterAccountStatusRequest $args
     * @return GetRegisterAccountStatusResponse
     */
    public function getRegisterAccountStatus(GetRegisterAccountStatusRequest $args)
    {
        $result = parent::getRegisterAccountStatus($args->toArray());
        return new GetRegisterAccountStatusResponse($result->toArray());
    }
}
