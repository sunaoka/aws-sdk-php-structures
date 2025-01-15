<?php

namespace Sunaoka\Aws\Structures\Comprehend\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DatasetEntityRecognizerAnnotations|null $Annotations
 * @property DatasetEntityRecognizerDocuments $Documents
 * @property DatasetEntityRecognizerEntityList|null $EntityList
 */
class DatasetEntityRecognizerInputDataConfig extends Shape
{
    /**
     * @param array{
     *     Annotations?: DatasetEntityRecognizerAnnotations|null,
     *     Documents: DatasetEntityRecognizerDocuments,
     *     EntityList?: DatasetEntityRecognizerEntityList|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
