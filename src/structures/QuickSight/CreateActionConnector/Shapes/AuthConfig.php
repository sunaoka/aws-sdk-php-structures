<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateActionConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BASIC'|'API_KEY'|'OAUTH2_CLIENT_CREDENTIALS'|'NONE'|'IAM'|'OAUTH2_AUTHORIZATION_CODE' $AuthenticationType
 * @property AuthenticationMetadata $AuthenticationMetadata
 */
class AuthConfig extends Shape
{
    /**
     * @param array{
     *     AuthenticationType: 'BASIC'|'API_KEY'|'OAUTH2_CLIENT_CREDENTIALS'|'NONE'|'IAM'|'OAUTH2_AUTHORIZATION_CODE',
     *     AuthenticationMetadata: AuthenticationMetadata
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
