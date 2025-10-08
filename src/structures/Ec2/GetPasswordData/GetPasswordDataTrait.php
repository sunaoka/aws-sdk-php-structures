<?php

namespace Sunaoka\Aws\Structures\Ec2\GetPasswordData;

trait GetPasswordDataTrait
{
    /**
     * @param GetPasswordDataRequest $args
     * @return GetPasswordDataResponse
     */
    public function getPasswordData(GetPasswordDataRequest $args)
    {
        $result = parent::getPasswordData($args->toArray());
        return new GetPasswordDataResponse($result->toArray());
    }
}
