<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListReviewTemplateAnswers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HELPFUL_RESOURCE'|'IMPROVEMENT_PLAN'|null $Type
 * @property list<ChoiceContent>|null $Content
 */
class AdditionalResources extends Shape
{
    /**
     * @param array{
     *     Type?: 'HELPFUL_RESOURCE'|'IMPROVEMENT_PLAN'|null,
     *     Content?: list<ChoiceContent>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
