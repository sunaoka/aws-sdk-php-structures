<?php

namespace Sunaoka\Aws\Structures\Repostspace\CreateSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $subdomain
 * @property 'BASIC'|'STANDARD' $tier
 * @property string|null $description
 * @property string|null $userKMSKey
 * @property array<string, string>|null $tags
 * @property string|null $roleArn
 * @property Shapes\SupportedEmailDomainsParameters|null $supportedEmailDomains
 */
class CreateSpaceRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     subdomain: string,
     *     tier: 'BASIC'|'STANDARD',
     *     description?: string|null,
     *     userKMSKey?: string|null,
     *     tags?: array<string, string>|null,
     *     roleArn?: string|null,
     *     supportedEmailDomains?: Shapes\SupportedEmailDomainsParameters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
