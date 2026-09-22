<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\CreateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property list<'IAM'|'IDC'> $identityProviders
 * @property Shapes\IdentityProviderConfiguration|null $identityProviderConfiguration
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreateDomainRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     identityProviders: list<'IAM'|'IDC'>,
     *     identityProviderConfiguration?: Shapes\IdentityProviderConfiguration|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
