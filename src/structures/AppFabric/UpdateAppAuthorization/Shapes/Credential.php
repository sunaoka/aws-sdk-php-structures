<?php

namespace Sunaoka\Aws\Structures\AppFabric\UpdateAppAuthorization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Oauth2Credential $oauth2Credential
 * @property ApiKeyCredential $apiKeyCredential
 */
class Credential extends Shape
{
    /**
     * @param array{
     *     oauth2Credential?: Oauth2Credential,
     *     apiKeyCredential?: ApiKeyCredential
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
