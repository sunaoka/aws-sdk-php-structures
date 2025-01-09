<?php

namespace Sunaoka\Aws\Structures\IVS\ImportPlaybackKeyPair\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $fingerprint
 * @property string $name
 * @property array<string, string> $tags
 */
class PlaybackKeyPair extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     fingerprint?: string,
     *     name?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
