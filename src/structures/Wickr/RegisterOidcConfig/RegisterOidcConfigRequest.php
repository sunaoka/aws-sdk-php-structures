<?php

namespace Sunaoka\Aws\Structures\Wickr\RegisterOidcConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property string $companyId
 * @property string|null $customUsername
 * @property string|null $extraAuthParams
 * @property string $issuer
 * @property string $scopes
 * @property string|null $secret
 * @property int|null $ssoTokenBufferMinutes
 * @property string|null $userId
 */
class RegisterOidcConfigRequest extends Request
{
    /**
     * @param array{
     *     networkId: string,
     *     companyId: string,
     *     customUsername?: string|null,
     *     extraAuthParams?: string|null,
     *     issuer: string,
     *     scopes: string,
     *     secret?: string|null,
     *     ssoTokenBufferMinutes?: int|null,
     *     userId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
