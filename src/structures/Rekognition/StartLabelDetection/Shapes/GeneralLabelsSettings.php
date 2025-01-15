<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartLabelDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $LabelInclusionFilters
 * @property list<string>|null $LabelExclusionFilters
 * @property list<string>|null $LabelCategoryInclusionFilters
 * @property list<string>|null $LabelCategoryExclusionFilters
 */
class GeneralLabelsSettings extends Shape
{
    /**
     * @param array{
     *     LabelInclusionFilters?: list<string>|null,
     *     LabelExclusionFilters?: list<string>|null,
     *     LabelCategoryInclusionFilters?: list<string>|null,
     *     LabelCategoryExclusionFilters?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
