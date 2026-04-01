<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DynatraceOAuthClientCredentialsConfig|null $oAuthClientCredentials
 */
class DynatraceServiceAuthorizationConfig extends Shape
{
    /**
     * @param array{oAuthClientCredentials?: DynatraceOAuthClientCredentialsConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
