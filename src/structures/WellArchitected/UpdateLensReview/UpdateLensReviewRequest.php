<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateLensReview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property string $LensAlias
 * @property string|null $LensNotes
 * @property array<string, string>|null $PillarNotes
 * @property Shapes\JiraSelectedQuestionConfiguration|null $JiraConfiguration
 */
class UpdateLensReviewRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     LensAlias: string,
     *     LensNotes?: string|null,
     *     PillarNotes?: array<string, string>|null,
     *     JiraConfiguration?: Shapes\JiraSelectedQuestionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
