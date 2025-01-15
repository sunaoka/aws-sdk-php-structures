<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\DeleteBackendAPI\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'API_KEY'|'AWS_IAM'|'AMAZON_COGNITO_USER_POOLS'|'OPENID_CONNECT'|null $Mode
 * @property BackendAPIAppSyncAuthSettings|null $Settings
 */
class BackendAPIAuthType extends Shape
{
    /**
     * @param array{
     *     Mode?: 'API_KEY'|'AWS_IAM'|'AMAZON_COGNITO_USER_POOLS'|'OPENID_CONNECT'|null,
     *     Settings?: BackendAPIAppSyncAuthSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
