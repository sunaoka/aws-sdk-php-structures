<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SrtCallerDecryption|null $Decryption
 * @property int|null $MinimumLatency
 * @property string|null $SrtListenerAddress
 * @property string|null $SrtListenerPort
 * @property string|null $StreamId
 */
class SrtCallerSource extends Shape
{
    /**
     * @param array{
     *     Decryption?: SrtCallerDecryption|null,
     *     MinimumLatency?: int|null,
     *     SrtListenerAddress?: string|null,
     *     SrtListenerPort?: string|null,
     *     StreamId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
