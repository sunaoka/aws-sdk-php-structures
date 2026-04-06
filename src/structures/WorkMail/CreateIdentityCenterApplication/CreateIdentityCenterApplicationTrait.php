<?php

namespace Sunaoka\Aws\Structures\WorkMail\CreateIdentityCenterApplication;

trait CreateIdentityCenterApplicationTrait
{
    /**
     * @param CreateIdentityCenterApplicationRequest $args
     * @return CreateIdentityCenterApplicationResponse
     */
    public function createIdentityCenterApplication(CreateIdentityCenterApplicationRequest $args)
    {
        $result = parent::createIdentityCenterApplication($args->toArray());
        return new CreateIdentityCenterApplicationResponse($result->toArray());
    }
}
