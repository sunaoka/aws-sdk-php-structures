<?php

namespace Sunaoka\Aws\Structures\Comprehend\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property string $LabelDelimiter
 */
class DatasetDocumentClassifierInputDataConfig extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     LabelDelimiter?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
