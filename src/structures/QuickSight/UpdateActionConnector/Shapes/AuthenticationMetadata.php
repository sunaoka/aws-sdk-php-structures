<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateActionConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AuthorizationCodeGrantMetadata|null $AuthorizationCodeGrantMetadata
 * @property ClientCredentialsGrantMetadata|null $ClientCredentialsGrantMetadata
 * @property BasicAuthConnectionMetadata|null $BasicAuthConnectionMetadata
 * @property APIKeyConnectionMetadata|null $ApiKeyConnectionMetadata
 * @property NoneConnectionMetadata|null $NoneConnectionMetadata
 * @property IAMConnectionMetadata|null $IamConnectionMetadata
 */
class AuthenticationMetadata extends Shape
{
    /**
     * @param array{
     *     AuthorizationCodeGrantMetadata?: AuthorizationCodeGrantMetadata|null,
     *     ClientCredentialsGrantMetadata?: ClientCredentialsGrantMetadata|null,
     *     BasicAuthConnectionMetadata?: BasicAuthConnectionMetadata|null,
     *     ApiKeyConnectionMetadata?: APIKeyConnectionMetadata|null,
     *     NoneConnectionMetadata?: NoneConnectionMetadata|null,
     *     IamConnectionMetadata?: IAMConnectionMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
