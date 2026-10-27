<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetDestinationEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<3000, 30000> $SourceListenerPort
 * @property int<10, 10000> $MinimumLatencyMilliseconds
 * @property EndpointEncryptionSecretConfiguration|null $EncryptionPassphrase
 */
class SrtCallerStandardDestinationEndpointConfiguration extends Shape
{
    /**
     * @param array{
     *     SourceListenerPort: int<3000, 30000>,
     *     MinimumLatencyMilliseconds: int<10, 10000>,
     *     EncryptionPassphrase?: EndpointEncryptionSecretConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
