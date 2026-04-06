<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListResourcesForWebACL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WebACLArn
 * @property 'APPLICATION_LOAD_BALANCER'|'API_GATEWAY'|'APPSYNC'|'COGNITO_USER_POOL'|'APP_RUNNER_SERVICE'|'VERIFIED_ACCESS_INSTANCE'|'AMPLIFY'|null $ResourceType
 */
class ListResourcesForWebACLRequest extends Request
{
    /**
     * @param array{
     *     WebACLArn: string,
     *     ResourceType?: 'APPLICATION_LOAD_BALANCER'|'API_GATEWAY'|'APPSYNC'|'COGNITO_USER_POOL'|'APP_RUNNER_SERVICE'|'VERIFIED_ACCESS_INSTANCE'|'AMPLIFY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
