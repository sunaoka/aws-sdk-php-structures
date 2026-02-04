<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SrtListenerDecryption|null $Decryption
 * @property int|null $MinimumLatency
 * @property string|null $StreamId
 */
class SrtListenerSettings extends Shape
{
    /**
     * @param array{
     *     Decryption?: SrtListenerDecryption|null,
     *     MinimumLatency?: int|null,
     *     StreamId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
