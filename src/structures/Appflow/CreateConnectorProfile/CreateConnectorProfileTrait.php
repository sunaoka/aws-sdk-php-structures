<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile;

trait CreateConnectorProfileTrait
{
    /**
     * @param CreateConnectorProfileRequest $args
     * @return CreateConnectorProfileResponse
     */
    public function createConnectorProfile(CreateConnectorProfileRequest $args)
    {
        $result = parent::createConnectorProfile($args->toArray());
        return new CreateConnectorProfileResponse($result->toArray());
    }
}
