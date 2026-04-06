<?php

namespace Sunaoka\Aws\Structures\IVS\ImportPlaybackKeyPair\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $fingerprint
 * @property string|null $name
 * @property array<string, string>|null $tags
 */
class PlaybackKeyPair extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     fingerprint?: string|null,
     *     name?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
