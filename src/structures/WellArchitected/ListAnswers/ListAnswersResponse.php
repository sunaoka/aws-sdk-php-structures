<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListAnswers;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $WorkloadId
 * @property int $MilestoneNumber
 * @property string $LensAlias
 * @property string $LensArn
 * @property list<Shapes\AnswerSummary> $AnswerSummaries
 * @property string $NextToken
 */
class ListAnswersResponse extends Response
{
}
