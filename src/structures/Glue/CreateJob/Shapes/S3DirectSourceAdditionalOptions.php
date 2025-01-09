<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BoundedSize
 * @property int $BoundedFiles
 * @property bool $EnableSamplePath
 * @property string $SamplePath
 */
class S3DirectSourceAdditionalOptions extends Shape
{
    /**
     * @param array{
     *     BoundedSize?: int,
     *     BoundedFiles?: int,
     *     EnableSamplePath?: bool,
     *     SamplePath?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
