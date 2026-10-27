<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetSourceEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<3000, 30000> $DestinationIngestPort
 * @property int<10, 10000> $MinimumLatencyMilliseconds
 * @property EndpointEncryptionSecretConfiguration|null $EncryptionPassphrase
 */
class SrtCallerStandardSourceEndpointConfiguration extends Shape
{
    /**
     * @param array{
     *     DestinationIngestPort: int<3000, 30000>,
     *     MinimumLatencyMilliseconds: int<10, 10000>,
     *     EncryptionPassphrase?: EndpointEncryptionSecretConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
