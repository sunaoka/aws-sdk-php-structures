<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PagerDutyOAuthClientCredentialsConfig|null $oAuthClientCredentials
 */
class PagerDutyAuthorizationConfig extends Shape
{
    /**
     * @param array{oAuthClientCredentials?: PagerDutyOAuthClientCredentialsConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
