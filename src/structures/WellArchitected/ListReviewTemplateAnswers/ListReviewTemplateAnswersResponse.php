<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListReviewTemplateAnswers;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TemplateArn
 * @property string|null $LensAlias
 * @property list<Shapes\ReviewTemplateAnswerSummary>|null $AnswerSummaries
 * @property string|null $NextToken
 */
class ListReviewTemplateAnswersResponse extends Response
{
}
