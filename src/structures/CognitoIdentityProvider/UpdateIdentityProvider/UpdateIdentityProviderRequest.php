<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateIdentityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $ProviderName
 * @property array<string, string>|null $ProviderDetails
 * @property array<string, string>|null $AttributeMapping
 * @property list<string>|null $IdpIdentifiers
 */
class UpdateIdentityProviderRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ProviderName: string,
     *     ProviderDetails?: array<string, string>|null,
     *     AttributeMapping?: array<string, string>|null,
     *     IdpIdentifiers?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
