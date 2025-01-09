<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListWorldExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3Bucket
 * @property string $s3Prefix
 */
class OutputLocation extends Shape
{
    /**
     * @param array{
     *     s3Bucket?: string,
     *     s3Prefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
