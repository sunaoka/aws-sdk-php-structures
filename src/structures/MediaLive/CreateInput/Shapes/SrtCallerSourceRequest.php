<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SrtCallerDecryptionRequest|null $Decryption
 * @property int|null $MinimumLatency
 * @property string|null $SrtListenerAddress
 * @property string|null $SrtListenerPort
 * @property string|null $StreamId
 */
class SrtCallerSourceRequest extends Shape
{
    /**
     * @param array{
     *     Decryption?: SrtCallerDecryptionRequest|null,
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
