<?php

namespace Sunaoka\Aws\Structures\SSOOIDC\RegisterClient;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientName
 * @property string $clientType
 * @property list<string> $scopes
 * @property list<string> $redirectUris
 * @property list<string> $grantTypes
 * @property string $issuerUrl
 * @property string $entitledApplicationArn
 */
class RegisterClientRequest extends Request
{
    /**
     * @param array{
     *     clientName: string,
     *     clientType: string,
     *     scopes?: list<string>,
     *     redirectUris?: list<string>,
     *     grantTypes?: list<string>,
     *     issuerUrl?: string,
     *     entitledApplicationArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
