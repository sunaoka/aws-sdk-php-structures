<?php

namespace Sunaoka\Aws\Structures\Wickr\RegisterOidcConfigTest;

trait RegisterOidcConfigTestTrait
{
    /**
     * @param RegisterOidcConfigTestRequest $args
     * @return RegisterOidcConfigTestResponse
     */
    public function registerOidcConfigTest(RegisterOidcConfigTestRequest $args)
    {
        $result = parent::registerOidcConfigTest($args->toArray());
        return new RegisterOidcConfigTestResponse($result->toArray());
    }
}
