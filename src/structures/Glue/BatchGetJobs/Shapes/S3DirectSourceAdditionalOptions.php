<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $BoundedSize
 * @property int|null $BoundedFiles
 * @property bool|null $EnableSamplePath
 * @property string|null $SamplePath
 */
class S3DirectSourceAdditionalOptions extends Shape
{
    /**
     * @param array{
     *     BoundedSize?: int|null,
     *     BoundedFiles?: int|null,
     *     EnableSamplePath?: bool|null,
     *     SamplePath?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
