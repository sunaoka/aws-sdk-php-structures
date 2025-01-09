<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreatePartnerInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SrtCallerDecryption $Decryption
 * @property int $MinimumLatency
 * @property string $SrtListenerAddress
 * @property string $SrtListenerPort
 * @property string $StreamId
 */
class SrtCallerSource extends Shape
{
    /**
     * @param array{
     *     Decryption?: SrtCallerDecryption,
     *     MinimumLatency?: int,
     *     SrtListenerAddress?: string,
     *     SrtListenerPort?: string,
     *     StreamId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
