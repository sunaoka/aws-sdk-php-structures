<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceAddress
 * @property int<0, 65535> $SourcePort
 * @property int<10, 10000> $MinimumLatencyMilliseconds
 * @property string|null $StreamId
 * @property SrtDecryptionConfiguration|null $DecryptionConfiguration
 */
class SrtCallerRouterInputConfiguration extends Shape
{
    /**
     * @param array{
     *     SourceAddress: string,
     *     SourcePort: int<0, 65535>,
     *     MinimumLatencyMilliseconds: int<10, 10000>,
     *     StreamId?: string|null,
     *     DecryptionConfiguration?: SrtDecryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
