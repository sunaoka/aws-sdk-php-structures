<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetMedicalTranscriptionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MediaFileUri
 * @property string|null $RedactedMediaFileUri
 */
class Media extends Shape
{
    /**
     * @param array{
     *     MediaFileUri?: string|null,
     *     RedactedMediaFileUri?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
