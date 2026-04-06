<?php

namespace Sunaoka\Aws\Structures\Wickr\GetOidcInfo;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property string|null $clientId
 * @property string|null $code
 * @property string|null $grantType
 * @property string|null $redirectUri
 * @property string|null $url
 * @property string|null $clientSecret
 * @property string|null $codeVerifier
 * @property string|null $certificate
 */
class GetOidcInfoRequest extends Request
{
    /**
     * @param array{
     *     networkId: string,
     *     clientId?: string|null,
     *     code?: string|null,
     *     grantType?: string|null,
     *     redirectUri?: string|null,
     *     url?: string|null,
     *     clientSecret?: string|null,
     *     codeVerifier?: string|null,
     *     certificate?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
