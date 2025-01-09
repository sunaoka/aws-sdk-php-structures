<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateReviewTemplateAnswer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateArn
 * @property string $LensAlias
 * @property string $QuestionId
 * @property list<string> $SelectedChoices
 * @property array<string, Shapes\ChoiceUpdate> $ChoiceUpdates
 * @property string $Notes
 * @property bool $IsApplicable
 * @property 'OUT_OF_SCOPE'|'BUSINESS_PRIORITIES'|'ARCHITECTURE_CONSTRAINTS'|'OTHER'|'NONE' $Reason
 */
class UpdateReviewTemplateAnswerRequest extends Request
{
    /**
     * @param array{
     *     TemplateArn: string,
     *     LensAlias: string,
     *     QuestionId: string,
     *     SelectedChoices?: list<string>,
     *     ChoiceUpdates?: array<string, Shapes\ChoiceUpdate>,
     *     Notes?: string,
     *     IsApplicable?: bool,
     *     Reason?: 'OUT_OF_SCOPE'|'BUSINESS_PRIORITIES'|'ARCHITECTURE_CONSTRAINTS'|'OTHER'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
