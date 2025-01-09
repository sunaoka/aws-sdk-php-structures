<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $LabelInclusionFilters
 * @property list<string> $LabelExclusionFilters
 * @property list<string> $LabelCategoryInclusionFilters
 * @property list<string> $LabelCategoryExclusionFilters
 */
class GeneralLabelsSettings extends Shape
{
    /**
     * @param array{
     *     LabelInclusionFilters?: list<string>,
     *     LabelExclusionFilters?: list<string>,
     *     LabelCategoryInclusionFilters?: list<string>,
     *     LabelCategoryExclusionFilters?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
