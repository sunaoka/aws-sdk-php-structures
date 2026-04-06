<?php

namespace Sunaoka\Aws\Structures\Wickr\RegisterOidcConfig;

trait RegisterOidcConfigTrait
{
    /**
     * @param RegisterOidcConfigRequest $args
     * @return RegisterOidcConfigResponse
     */
    public function registerOidcConfig(RegisterOidcConfigRequest $args)
    {
        $result = parent::registerOidcConfig($args->toArray());
        return new RegisterOidcConfigResponse($result->toArray());
    }
}
