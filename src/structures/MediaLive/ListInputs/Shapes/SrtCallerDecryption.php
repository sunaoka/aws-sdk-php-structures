<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListInputs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AES128'|'AES192'|'AES256'|null $Algorithm
 * @property string|null $PassphraseSecretArn
 */
class SrtCallerDecryption extends Shape
{
    /**
     * @param array{
     *     Algorithm?: 'AES128'|'AES192'|'AES256'|null,
     *     PassphraseSecretArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
