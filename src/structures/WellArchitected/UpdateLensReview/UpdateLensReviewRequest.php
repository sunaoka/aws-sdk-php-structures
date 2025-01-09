<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateLensReview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property string $LensAlias
 * @property string $LensNotes
 * @property array<string, string> $PillarNotes
 * @property Shapes\JiraSelectedQuestionConfiguration $JiraConfiguration
 */
class UpdateLensReviewRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     LensAlias: string,
     *     LensNotes?: string,
     *     PillarNotes?: array<string, string>,
     *     JiraConfiguration?: Shapes\JiraSelectedQuestionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
