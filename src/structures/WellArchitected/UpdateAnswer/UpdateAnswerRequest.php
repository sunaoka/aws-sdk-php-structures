<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateAnswer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property string $LensAlias
 * @property string $QuestionId
 * @property list<string>|null $SelectedChoices
 * @property array<string, Shapes\ChoiceUpdate>|null $ChoiceUpdates
 * @property string|null $Notes
 * @property bool|null $IsApplicable
 * @property 'OUT_OF_SCOPE'|'BUSINESS_PRIORITIES'|'ARCHITECTURE_CONSTRAINTS'|'OTHER'|'NONE'|null $Reason
 */
class UpdateAnswerRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     LensAlias: string,
     *     QuestionId: string,
     *     SelectedChoices?: list<string>|null,
     *     ChoiceUpdates?: array<string, Shapes\ChoiceUpdate>|null,
     *     Notes?: string|null,
     *     IsApplicable?: bool|null,
     *     Reason?: 'OUT_OF_SCOPE'|'BUSINESS_PRIORITIES'|'ARCHITECTURE_CONSTRAINTS'|'OTHER'|'NONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
