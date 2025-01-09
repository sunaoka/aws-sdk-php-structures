<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListAnswers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property string $LensAlias
 * @property string $PillarId
 * @property int<1, 100> $MilestoneNumber
 * @property string $NextToken
 * @property int<1, 50> $MaxResults
 * @property 'PRIORITIZED'|'NONE' $QuestionPriority
 */
class ListAnswersRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     LensAlias: string,
     *     PillarId?: string,
     *     MilestoneNumber?: int<1, 100>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 50>,
     *     QuestionPriority?: 'PRIORITIZED'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
