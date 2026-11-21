<?php

namespace Sunaoka\Aws\Structures\TranscribeService\TranscribeAudio\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $MediaBytes
 * @property string|null $MediaFileUri
 */
class SyncMedia extends Shape
{
    /**
     * @param array{
     *     MediaBytes?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     MediaFileUri?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
