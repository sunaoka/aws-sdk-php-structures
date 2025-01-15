<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListLensReviews;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $WorkloadId
 * @property int<1, 100>|null $MilestoneNumber
 * @property list<Shapes\LensReviewSummary>|null $LensReviewSummaries
 * @property string|null $NextToken
 */
class ListLensReviewsResponse extends Response
{
}
