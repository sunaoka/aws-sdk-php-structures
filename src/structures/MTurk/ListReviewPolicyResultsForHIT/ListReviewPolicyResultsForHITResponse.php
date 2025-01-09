<?php

namespace Sunaoka\Aws\Structures\MTurk\ListReviewPolicyResultsForHIT;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $HITId
 * @property Shapes\ReviewPolicy $AssignmentReviewPolicy
 * @property Shapes\ReviewPolicy $HITReviewPolicy
 * @property Shapes\ReviewReport $AssignmentReviewReport
 * @property Shapes\ReviewReport $HITReviewReport
 * @property string $NextToken
 */
class ListReviewPolicyResultsForHITResponse extends Response
{
}
