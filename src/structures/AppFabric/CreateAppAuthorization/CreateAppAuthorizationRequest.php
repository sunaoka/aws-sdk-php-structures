<?php

namespace Sunaoka\Aws\Structures\AppFabric\CreateAppAuthorization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appBundleIdentifier
 * @property string $app
 * @property Shapes\Credential $credential
 * @property Shapes\Tenant $tenant
 * @property 'oauth2'|'apiKey' $authType
 * @property string $clientToken
 * @property list<Shapes\Tag> $tags
 */
class CreateAppAuthorizationRequest extends Request
{
    /**
     * @param array{
     *     appBundleIdentifier: string,
     *     app: string,
     *     credential: Shapes\Credential,
     *     tenant: Shapes\Tenant,
     *     authType: 'oauth2'|'apiKey',
     *     clientToken?: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
