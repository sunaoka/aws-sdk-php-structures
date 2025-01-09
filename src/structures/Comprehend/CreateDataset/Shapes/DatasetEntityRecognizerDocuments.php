<?php

namespace Sunaoka\Aws\Structures\Comprehend\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property 'ONE_DOC_PER_FILE'|'ONE_DOC_PER_LINE' $InputFormat
 */
class DatasetEntityRecognizerDocuments extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     InputFormat?: 'ONE_DOC_PER_FILE'|'ONE_DOC_PER_LINE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
