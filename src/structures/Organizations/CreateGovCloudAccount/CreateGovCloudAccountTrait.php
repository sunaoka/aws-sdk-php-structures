<?php

namespace Sunaoka\Aws\Structures\Organizations\CreateGovCloudAccount;

trait CreateGovCloudAccountTrait
{
    /**
     * @param CreateGovCloudAccountRequest $args
     * @return CreateGovCloudAccountResponse
     */
    public function createGovCloudAccount(CreateGovCloudAccountRequest $args)
    {
        $result = parent::createGovCloudAccount($args->toArray());
        return new CreateGovCloudAccountResponse($result->toArray());
    }
}
