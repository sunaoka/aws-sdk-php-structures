<?php

namespace Sunaoka\Aws\Structures\FIS\GetExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketName
 * @property string $prefix
 */
class ExperimentS3LogConfiguration extends Shape
{
    /**
     * @param array{
     *     bucketName?: string,
     *     prefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
