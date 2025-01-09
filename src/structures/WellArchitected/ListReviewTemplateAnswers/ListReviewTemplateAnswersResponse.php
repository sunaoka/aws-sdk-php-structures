<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListReviewTemplateAnswers;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TemplateArn
 * @property string $LensAlias
 * @property list<Shapes\ReviewTemplateAnswerSummary> $AnswerSummaries
 * @property string $NextToken
 */
class ListReviewTemplateAnswersResponse extends Response
{
}
