<?php

namespace Sunaoka\Aws\Structures\SsmSap\RegisterApplication;

trait RegisterApplicationTrait
{
    /**
     * @param RegisterApplicationRequest $args
     * @return RegisterApplicationResponse
     */
    public function registerApplication(RegisterApplicationRequest $args)
    {
        $result = parent::registerApplication($args->toArray());
        return new RegisterApplicationResponse($result->toArray());
    }
}
