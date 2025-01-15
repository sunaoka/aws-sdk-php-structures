<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetMediaAnalysisJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Moderation
 */
class MediaAnalysisModelVersions extends Shape
{
    /**
     * @param array{Moderation?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
