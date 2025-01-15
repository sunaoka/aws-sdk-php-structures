<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminInitiateAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccessToken
 * @property int|null $ExpiresIn
 * @property string|null $TokenType
 * @property string|null $RefreshToken
 * @property string|null $IdToken
 * @property NewDeviceMetadataType|null $NewDeviceMetadata
 */
class AuthenticationResultType extends Shape
{
    /**
     * @param array{
     *     AccessToken?: string|null,
     *     ExpiresIn?: int|null,
     *     TokenType?: string|null,
     *     RefreshToken?: string|null,
     *     IdToken?: string|null,
     *     NewDeviceMetadata?: NewDeviceMetadataType|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
