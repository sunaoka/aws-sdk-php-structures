<?php

namespace Sunaoka\Aws\Structures\Comprehend\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DatasetAugmentedManifestsListItem> $AugmentedManifests
 * @property 'COMPREHEND_CSV'|'AUGMENTED_MANIFEST' $DataFormat
 * @property DatasetDocumentClassifierInputDataConfig $DocumentClassifierInputDataConfig
 * @property DatasetEntityRecognizerInputDataConfig $EntityRecognizerInputDataConfig
 */
class DatasetInputDataConfig extends Shape
{
    /**
     * @param array{
     *     AugmentedManifests?: list<DatasetAugmentedManifestsListItem>,
     *     DataFormat?: 'COMPREHEND_CSV'|'AUGMENTED_MANIFEST',
     *     DocumentClassifierInputDataConfig?: DatasetDocumentClassifierInputDataConfig,
     *     EntityRecognizerInputDataConfig?: DatasetEntityRecognizerInputDataConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
