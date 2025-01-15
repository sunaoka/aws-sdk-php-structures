<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeEntityRecognizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMPREHEND_CSV'|'AUGMENTED_MANIFEST'|null $DataFormat
 * @property list<EntityTypesListItem> $EntityTypes
 * @property EntityRecognizerDocuments|null $Documents
 * @property EntityRecognizerAnnotations|null $Annotations
 * @property EntityRecognizerEntityList|null $EntityList
 * @property list<AugmentedManifestsListItem>|null $AugmentedManifests
 */
class EntityRecognizerInputDataConfig extends Shape
{
    /**
     * @param array{
     *     DataFormat?: 'COMPREHEND_CSV'|'AUGMENTED_MANIFEST'|null,
     *     EntityTypes: list<EntityTypesListItem>,
     *     Documents?: EntityRecognizerDocuments|null,
     *     Annotations?: EntityRecognizerAnnotations|null,
     *     EntityList?: EntityRecognizerEntityList|null,
     *     AugmentedManifests?: list<AugmentedManifestsListItem>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
