<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListLensReviewImprovements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property string $LensAlias
 * @property string $PillarId
 * @property int $MilestoneNumber
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'PRIORITIZED'|'NONE' $QuestionPriority
 */
class ListLensReviewImprovementsRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     LensAlias: string,
     *     PillarId?: string,
     *     MilestoneNumber?: int,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     QuestionPriority?: 'PRIORITIZED'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
