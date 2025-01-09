<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AES128'|'AES192'|'AES256' $Algorithm
 * @property string $PassphraseSecretArn
 */
class SrtCallerDecryption extends Shape
{
    /**
     * @param array{
     *     Algorithm?: 'AES128'|'AES192'|'AES256',
     *     PassphraseSecretArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
