<?php

namespace Sunaoka\Aws\Structures\IVS\ListPlaybackKeyPairs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property array<string, string> $tags
 */
class PlaybackKeyPairSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
