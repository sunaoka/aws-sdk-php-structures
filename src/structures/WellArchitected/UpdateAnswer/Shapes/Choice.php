<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChoiceId
 * @property string|null $Title
 * @property string|null $Description
 * @property ChoiceContent|null $HelpfulResource
 * @property ChoiceContent|null $ImprovementPlan
 * @property list<AdditionalResources>|null $AdditionalResources
 */
class Choice extends Shape
{
    /**
     * @param array{
     *     ChoiceId?: string|null,
     *     Title?: string|null,
     *     Description?: string|null,
     *     HelpfulResource?: ChoiceContent|null,
     *     ImprovementPlan?: ChoiceContent|null,
     *     AdditionalResources?: list<AdditionalResources>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
