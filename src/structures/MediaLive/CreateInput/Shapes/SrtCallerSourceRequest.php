<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SrtCallerDecryptionRequest $Decryption
 * @property int $MinimumLatency
 * @property string $SrtListenerAddress
 * @property string $SrtListenerPort
 * @property string $StreamId
 */
class SrtCallerSourceRequest extends Shape
{
    /**
     * @param array{
     *     Decryption?: SrtCallerDecryptionRequest,
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
