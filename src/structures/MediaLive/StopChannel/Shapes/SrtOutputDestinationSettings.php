<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EncryptionPassphraseSecretArn
 * @property string|null $StreamId
 * @property string|null $Url
 */
class SrtOutputDestinationSettings extends Shape
{
    /**
     * @param array{
     *     EncryptionPassphraseSecretArn?: string|null,
     *     StreamId?: string|null,
     *     Url?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
