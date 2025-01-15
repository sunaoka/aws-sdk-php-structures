<?php

namespace Sunaoka\Aws\Structures\FIS\GetExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucketName
 * @property string|null $prefix
 */
class ReportConfigurationS3Output extends Shape
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
