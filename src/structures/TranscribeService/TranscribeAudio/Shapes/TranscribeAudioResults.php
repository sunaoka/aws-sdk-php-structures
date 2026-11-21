<?php

namespace Sunaoka\Aws\Structures\TranscribeService\TranscribeAudio\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Transcript
 * @property list<SyncItem>|null $Items
 */
class TranscribeAudioResults extends Shape
{
    /**
     * @param array{
     *     Transcript?: string|null,
     *     Items?: list<SyncItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
