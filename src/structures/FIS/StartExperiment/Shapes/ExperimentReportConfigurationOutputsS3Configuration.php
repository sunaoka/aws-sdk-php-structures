<?php

namespace Sunaoka\Aws\Structures\FIS\StartExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucketName
 * @property string|null $prefix
 */
class ExperimentReportConfigurationOutputsS3Configuration extends Shape
{
    /**
     * @param array{
     *     bucketName?: string|null,
     *     prefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
