<?php

namespace Sunaoka\Aws\Structures\SSOOIDC\RegisterClient;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientName
 * @property string $clientType
 * @property list<string>|null $scopes
 * @property list<string>|null $redirectUris
 * @property list<string>|null $grantTypes
 * @property string|null $issuerUrl
 * @property string|null $entitledApplicationArn
 */
class RegisterClientRequest extends Request
{
    /**
     * @param array{
     *     clientName: string,
     *     clientType: string,
     *     scopes?: list<string>|null,
     *     redirectUris?: list<string>|null,
     *     grantTypes?: list<string>|null,
     *     issuerUrl?: string|null,
     *     entitledApplicationArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
