<?php

namespace Sunaoka\Aws\Structures\Wickr\RegisterOidcConfigTest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property string|null $extraAuthParams
 * @property string $issuer
 * @property string $scopes
 * @property string|null $certificate
 */
class RegisterOidcConfigTestRequest extends Request
{
    /**
     * @param array{
     *     networkId: string,
     *     extraAuthParams?: string|null,
     *     issuer: string,
     *     scopes: string,
     *     certificate?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
