<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListLensReviewImprovements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property string $LensAlias
 * @property string|null $PillarId
 * @property int<1, 100>|null $MilestoneNumber
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property 'PRIORITIZED'|'NONE'|null $QuestionPriority
 */
class ListLensReviewImprovementsRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     LensAlias: string,
     *     PillarId?: string|null,
     *     MilestoneNumber?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     QuestionPriority?: 'PRIORITIZED'|'NONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
