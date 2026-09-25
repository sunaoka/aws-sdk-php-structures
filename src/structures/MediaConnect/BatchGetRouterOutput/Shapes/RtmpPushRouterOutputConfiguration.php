<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationAddress
 * @property int<443, 65535> $DestinationPort
 * @property string $ApplicationName
 * @property string $StreamName
 * @property TlsEncryption|null $TlsEncryption
 */
class RtmpPushRouterOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     DestinationAddress: string,
     *     DestinationPort: int<443, 65535>,
     *     ApplicationName: string,
     *     StreamName: string,
     *     TlsEncryption?: TlsEncryption|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
