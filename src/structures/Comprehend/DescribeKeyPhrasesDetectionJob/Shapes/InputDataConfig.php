<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeKeyPhrasesDetectionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property 'ONE_DOC_PER_FILE'|'ONE_DOC_PER_LINE' $InputFormat
 * @property DocumentReaderConfig $DocumentReaderConfig
 */
class InputDataConfig extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     InputFormat?: 'ONE_DOC_PER_FILE'|'ONE_DOC_PER_LINE',
     *     DocumentReaderConfig?: DocumentReaderConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
