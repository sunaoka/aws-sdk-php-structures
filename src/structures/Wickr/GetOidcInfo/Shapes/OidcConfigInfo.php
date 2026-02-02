<?php

namespace Sunaoka\Aws\Structures\Wickr\GetOidcInfo\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $applicationName
 * @property string|null $clientId
 * @property string $companyId
 * @property string $scopes
 * @property string $issuer
 * @property string|null $clientSecret
 * @property string|null $secret
 * @property string|null $redirectUrl
 * @property string|null $userId
 * @property string|null $customUsername
 * @property string|null $caCertificate
 * @property int<1, 10>|null $applicationId
 * @property int|null $ssoTokenBufferMinutes
 * @property string|null $extraAuthParams
 */
class OidcConfigInfo extends Shape
{
    /**
     * @param array{
     *     applicationName?: string|null,
     *     clientId?: string|null,
     *     companyId: string,
     *     scopes: string,
     *     issuer: string,
     *     clientSecret?: string|null,
     *     secret?: string|null,
     *     redirectUrl?: string|null,
     *     userId?: string|null,
     *     customUsername?: string|null,
     *     caCertificate?: string|null,
     *     applicationId?: int<1, 10>|null,
     *     ssoTokenBufferMinutes?: int|null,
     *     extraAuthParams?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
