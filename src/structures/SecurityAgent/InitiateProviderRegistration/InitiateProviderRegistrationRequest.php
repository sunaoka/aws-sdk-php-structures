<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\InitiateProviderRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'GITHUB'|'GITLAB'|'BITBUCKET'|'CONFLUENCE'|'AZURE_DEVOPS' $provider
 * @property string|null $targetUrl
 * @property string|null $organizationName
 * @property string|null $clientId
 * @property string|null $clientSecret
 */
class InitiateProviderRegistrationRequest extends Request
{
    /**
     * @param array{
     *     provider: 'GITHUB'|'GITLAB'|'BITBUCKET'|'CONFLUENCE'|'AZURE_DEVOPS',
     *     targetUrl?: string|null,
     *     organizationName?: string|null,
     *     clientId?: string|null,
     *     clientSecret?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
