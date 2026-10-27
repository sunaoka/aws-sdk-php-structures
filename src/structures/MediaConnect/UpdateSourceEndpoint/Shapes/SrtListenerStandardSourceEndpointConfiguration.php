<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateSourceEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1024, 65535> $SourceListenerPort
 * @property string $SourceAddress
 * @property int<10, 10000> $MinimumLatencyMilliseconds
 * @property string|null $StreamId
 * @property EndpointEncryptionSecretConfiguration|null $EncryptionPassphrase
 */
class SrtListenerStandardSourceEndpointConfiguration extends Shape
{
    /**
     * @param array{
     *     SourceListenerPort: int<1024, 65535>,
     *     SourceAddress: string,
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
