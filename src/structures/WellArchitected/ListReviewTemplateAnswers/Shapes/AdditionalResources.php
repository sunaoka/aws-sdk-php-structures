<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListReviewTemplateAnswers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HELPFUL_RESOURCE'|'IMPROVEMENT_PLAN' $Type
 * @property list<ChoiceContent> $Content
 */
class AdditionalResources extends Shape
{
    /**
     * @param array{
     *     Type?: 'HELPFUL_RESOURCE'|'IMPROVEMENT_PLAN',
     *     Content?: list<ChoiceContent>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
