<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetMedicalScribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MediaFileUri
 * @property string $RedactedMediaFileUri
 */
class Media extends Shape
{
    /**
     * @param array{
     *     MediaFileUri?: string,
     *     RedactedMediaFileUri?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
