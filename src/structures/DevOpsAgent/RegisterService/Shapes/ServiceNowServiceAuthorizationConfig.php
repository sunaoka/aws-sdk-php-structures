<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceNowOAuthClientCredentialsConfig|null $oAuthClientCredentials
 */
class ServiceNowServiceAuthorizationConfig extends Shape
{
    /**
     * @param array{oAuthClientCredentials?: ServiceNowOAuthClientCredentialsConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
