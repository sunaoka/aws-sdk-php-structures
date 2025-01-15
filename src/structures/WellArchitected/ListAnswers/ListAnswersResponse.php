<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListAnswers;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $WorkloadId
 * @property int<1, 100>|null $MilestoneNumber
 * @property string|null $LensAlias
 * @property string|null $LensArn
 * @property list<Shapes\AnswerSummary>|null $AnswerSummaries
 * @property string|null $NextToken
 */
class ListAnswersResponse extends Response
{
}
