<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EncryptionPassphraseSecretArn
 * @property string|null $StreamId
 * @property string|null $Url
 * @property 'CALLER'|'LISTENER'|null $ConnectionMode
 * @property int|null $ListenerPort
 */
class SrtOutputDestinationSettings extends Shape
{
    /**
     * @param array{
     *     EncryptionPassphraseSecretArn?: string|null,
     *     StreamId?: string|null,
     *     Url?: string|null,
     *     ConnectionMode?: 'CALLER'|'LISTENER'|null,
     *     ListenerPort?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
