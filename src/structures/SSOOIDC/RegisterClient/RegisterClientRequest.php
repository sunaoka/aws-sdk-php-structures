<?php

namespace Sunaoka\Aws\Structures\SSOOIDC\RegisterClient;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientName
 * @property string $clientType
 * @property list<string>|null $scopes
 */
class RegisterClientRequest extends Request
{
    /**
     * @param array{
     *     clientName: string,
     *     clientType: string,
     *     scopes?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
