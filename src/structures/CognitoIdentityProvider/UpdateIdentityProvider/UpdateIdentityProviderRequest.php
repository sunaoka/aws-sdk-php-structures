<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateIdentityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $ProviderName
 * @property array<string, string> $ProviderDetails
 * @property array<string, string> $AttributeMapping
 * @property list<string> $IdpIdentifiers
 */
class UpdateIdentityProviderRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ProviderName: string,
     *     ProviderDetails?: array<string, string>,
     *     AttributeMapping?: array<string, string>,
     *     IdpIdentifiers?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
