<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetClientToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientId
 * @property string $Secret
 * @property list<string>|null $Scopes
 * @property array<string, string>|null $ClientMetadata
 */
class GetClientTokenRequest extends Request
{
    /**
     * @param array{
     *     ClientId: string,
     *     Secret: string,
     *     Scopes?: list<string>|null,
     *     ClientMetadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
