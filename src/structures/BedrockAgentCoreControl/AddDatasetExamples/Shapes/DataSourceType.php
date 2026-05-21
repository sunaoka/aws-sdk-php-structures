<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\AddDatasetExamples\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InlineExamplesSource|null $inlineExamples
 * @property S3Source|null $s3Source
 */
class DataSourceType extends Shape
{
    /**
     * @param array{
     *     inlineExamples?: InlineExamplesSource|null,
     *     s3Source?: S3Source|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
