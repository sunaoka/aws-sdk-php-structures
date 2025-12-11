<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateActionConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BaseEndpoint
 * @property string $RedirectUrl
 * @property 'PLAIN_CREDENTIALS'|null $AuthorizationCodeGrantCredentialsSource
 * @property AuthorizationCodeGrantCredentialsDetails|null $AuthorizationCodeGrantCredentialsDetails
 */
class AuthorizationCodeGrantMetadata extends Shape
{
    /**
     * @param array{
     *     BaseEndpoint: string,
     *     RedirectUrl: string,
     *     AuthorizationCodeGrantCredentialsSource?: 'PLAIN_CREDENTIALS'|null,
     *     AuthorizationCodeGrantCredentialsDetails?: AuthorizationCodeGrantCredentialsDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
