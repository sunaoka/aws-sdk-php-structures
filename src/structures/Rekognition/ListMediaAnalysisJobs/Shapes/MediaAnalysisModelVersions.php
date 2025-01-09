<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListMediaAnalysisJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Moderation
 */
class MediaAnalysisModelVersions extends Shape
{
    /**
     * @param array{Moderation?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
