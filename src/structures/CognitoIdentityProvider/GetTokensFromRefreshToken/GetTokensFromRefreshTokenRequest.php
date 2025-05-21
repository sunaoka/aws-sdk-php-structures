<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetTokensFromRefreshToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RefreshToken
 * @property string $ClientId
 * @property string|null $ClientSecret
 * @property string|null $DeviceKey
 * @property array<string, string>|null $ClientMetadata
 */
class GetTokensFromRefreshTokenRequest extends Request
{
    /**
     * @param array{
     *     RefreshToken: string,
     *     ClientId: string,
     *     ClientSecret?: string|null,
     *     DeviceKey?: string|null,
     *     ClientMetadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
