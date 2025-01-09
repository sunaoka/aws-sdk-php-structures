<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminInitiateAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccessToken
 * @property int $ExpiresIn
 * @property string $TokenType
 * @property string $RefreshToken
 * @property string $IdToken
 * @property NewDeviceMetadataType $NewDeviceMetadata
 */
class AuthenticationResultType extends Shape
{
    /**
     * @param array{
     *     AccessToken?: string,
     *     ExpiresIn?: int,
     *     TokenType?: string,
     *     RefreshToken?: string,
     *     IdToken?: string,
     *     NewDeviceMetadata?: NewDeviceMetadataType
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
