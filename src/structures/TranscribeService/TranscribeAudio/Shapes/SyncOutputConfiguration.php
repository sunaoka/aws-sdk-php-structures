<?php

namespace Sunaoka\Aws\Structures\TranscribeService\TranscribeAudio\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OutputMediaFileUri
 */
class SyncOutputConfiguration extends Shape
{
    /**
     * @param array{OutputMediaFileUri: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
