<?php

namespace Sunaoka\Aws\Structures\MTurk\ListReviewPolicyResultsForHIT;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $HITId
 * @property Shapes\ReviewPolicy|null $AssignmentReviewPolicy
 * @property Shapes\ReviewPolicy|null $HITReviewPolicy
 * @property Shapes\ReviewReport|null $AssignmentReviewReport
 * @property Shapes\ReviewReport|null $HITReviewReport
 * @property string|null $NextToken
 */
class ListReviewPolicyResultsForHITResponse extends Response
{
}
