<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateSourceEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SecretsManagerEndpointEncryptionConfiguration|null $SecretsManager
 * @property AutomaticEndpointEncryptionConfiguration|null $Automatic
 */
class EndpointEncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     SecretsManager?: SecretsManagerEndpointEncryptionConfiguration|null,
     *     Automatic?: AutomaticEndpointEncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
