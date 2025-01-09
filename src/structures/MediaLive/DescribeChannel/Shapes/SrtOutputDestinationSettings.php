<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EncryptionPassphraseSecretArn
 * @property string $StreamId
 * @property string $Url
 */
class SrtOutputDestinationSettings extends Shape
{
    /**
     * @param array{
     *     EncryptionPassphraseSecretArn?: string,
     *     StreamId?: string,
     *     Url?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
