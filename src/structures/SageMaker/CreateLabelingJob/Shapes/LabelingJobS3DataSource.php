<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateLabelingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ManifestS3Uri
 */
class LabelingJobS3DataSource extends Shape
{
    /**
     * @param array{ManifestS3Uri: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
