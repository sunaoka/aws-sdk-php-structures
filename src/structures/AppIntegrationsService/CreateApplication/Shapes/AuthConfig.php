<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'API_KEY'|'CONNECT_JWT'|null $AuthType
 * @property string|null $CredentialProviderIdentifier
 * @property string|null $AudienceOverride
 */
class AuthConfig extends Shape
{
    /**
     * @param array{
     *     AuthType?: 'API_KEY'|'CONNECT_JWT'|null,
     *     CredentialProviderIdentifier?: string|null,
     *     AudienceOverride?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
