<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SrtListenerDecryptionRequest $Decryption
 * @property int $MinimumLatency
 * @property string|null $StreamId
 */
class SrtListenerSettingsRequest extends Shape
{
    /**
     * @param array{
     *     Decryption: SrtListenerDecryptionRequest,
     *     MinimumLatency: int,
     *     StreamId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
