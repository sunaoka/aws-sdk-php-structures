<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateAnswer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property string $LensAlias
 * @property string $QuestionId
 * @property list<string> $SelectedChoices
 * @property array<string, Shapes\ChoiceUpdate> $ChoiceUpdates
 * @property string $Notes
 * @property bool $IsApplicable
 * @property 'OUT_OF_SCOPE'|'BUSINESS_PRIORITIES'|'ARCHITECTURE_CONSTRAINTS'|'OTHER'|'NONE' $Reason
 */
class UpdateAnswerRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
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
