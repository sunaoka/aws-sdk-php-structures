<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeEntityRecognizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMPREHEND_CSV'|'AUGMENTED_MANIFEST' $DataFormat
 * @property list<EntityTypesListItem> $EntityTypes
 * @property EntityRecognizerDocuments $Documents
 * @property EntityRecognizerAnnotations $Annotations
 * @property EntityRecognizerEntityList $EntityList
 * @property list<AugmentedManifestsListItem> $AugmentedManifests
 */
class EntityRecognizerInputDataConfig extends Shape
{
    /**
     * @param array{
     *     DataFormat?: 'COMPREHEND_CSV'|'AUGMENTED_MANIFEST',
     *     EntityTypes: list<EntityTypesListItem>,
     *     Documents?: EntityRecognizerDocuments,
     *     Annotations?: EntityRecognizerAnnotations,
     *     EntityList?: EntityRecognizerEntityList,
     *     AugmentedManifests?: list<AugmentedManifestsListItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
