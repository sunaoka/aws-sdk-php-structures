<?php

namespace Sunaoka\Aws\Structures\AppFabric\CreateAppAuthorization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Oauth2Credential|null $oauth2Credential
 * @property ApiKeyCredential|null $apiKeyCredential
 */
class Credential extends Shape
{
    /**
     * @param array{
     *     oauth2Credential?: Oauth2Credential|null,
     *     apiKeyCredential?: ApiKeyCredential|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
