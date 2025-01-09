<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\CreateBackendAPI\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'API_KEY'|'AWS_IAM'|'AMAZON_COGNITO_USER_POOLS'|'OPENID_CONNECT' $Mode
 * @property BackendAPIAppSyncAuthSettings $Settings
 */
class BackendAPIAuthType extends Shape
{
    /**
     * @param array{
     *     Mode?: 'API_KEY'|'AWS_IAM'|'AMAZON_COGNITO_USER_POOLS'|'OPENID_CONNECT',
     *     Settings?: BackendAPIAppSyncAuthSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
