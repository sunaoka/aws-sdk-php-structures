<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'API_KEY'|null $AuthType
 * @property string|null $CredentialProviderIdentifier
 */
class AuthConfig extends Shape
{
    /**
     * @param array{
     *     AuthType?: 'API_KEY'|null,
     *     CredentialProviderIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
