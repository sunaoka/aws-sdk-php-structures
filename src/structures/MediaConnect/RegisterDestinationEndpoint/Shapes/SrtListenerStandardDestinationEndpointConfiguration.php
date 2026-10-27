<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RegisterDestinationEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationAddress
 * @property int<0, 65531> $DestinationIngestPort
 * @property int<10, 10000> $MinimumLatencyMilliseconds
 * @property string|null $StreamId
 * @property EndpointEncryptionSecretConfiguration|null $EncryptionPassphrase
 */
class SrtListenerStandardDestinationEndpointConfiguration extends Shape
{
    /**
     * @param array{
     *     DestinationAddress: string,
     *     DestinationIngestPort: int<0, 65531>,
     *     MinimumLatencyMilliseconds: int<10, 10000>,
     *     StreamId?: string|null,
     *     EncryptionPassphrase?: EndpointEncryptionSecretConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
