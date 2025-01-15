<?php

namespace Sunaoka\Aws\Structures\Comprehend\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DatasetAugmentedManifestsListItem>|null $AugmentedManifests
 * @property 'COMPREHEND_CSV'|'AUGMENTED_MANIFEST'|null $DataFormat
 * @property DatasetDocumentClassifierInputDataConfig|null $DocumentClassifierInputDataConfig
 * @property DatasetEntityRecognizerInputDataConfig|null $EntityRecognizerInputDataConfig
 */
class DatasetInputDataConfig extends Shape
{
    /**
     * @param array{
     *     AugmentedManifests?: list<DatasetAugmentedManifestsListItem>|null,
     *     DataFormat?: 'COMPREHEND_CSV'|'AUGMENTED_MANIFEST'|null,
     *     DocumentClassifierInputDataConfig?: DatasetDocumentClassifierInputDataConfig|null,
     *     EntityRecognizerInputDataConfig?: DatasetEntityRecognizerInputDataConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
