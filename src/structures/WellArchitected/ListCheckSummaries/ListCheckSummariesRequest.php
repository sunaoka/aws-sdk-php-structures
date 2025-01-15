<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListCheckSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 * @property string $LensArn
 * @property string $PillarId
 * @property string $QuestionId
 * @property string $ChoiceId
 */
class ListCheckSummariesRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null,
     *     LensArn: string,
     *     PillarId: string,
     *     QuestionId: string,
     *     ChoiceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
