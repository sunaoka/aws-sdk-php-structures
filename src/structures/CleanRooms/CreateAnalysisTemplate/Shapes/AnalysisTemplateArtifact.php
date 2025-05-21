<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateAnalysisTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Location $location
 */
class AnalysisTemplateArtifact extends Shape
{
    /**
     * @param array{location: S3Location} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
