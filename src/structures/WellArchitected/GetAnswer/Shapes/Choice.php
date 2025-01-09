<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChoiceId
 * @property string $Title
 * @property string $Description
 * @property ChoiceContent $HelpfulResource
 * @property ChoiceContent $ImprovementPlan
 * @property list<AdditionalResources> $AdditionalResources
 */
class Choice extends Shape
{
    /**
     * @param array{
     *     ChoiceId?: string,
     *     Title?: string,
     *     Description?: string,
     *     HelpfulResource?: ChoiceContent,
     *     ImprovementPlan?: ChoiceContent,
     *     AdditionalResources?: list<AdditionalResources>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
