<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListLensReviews;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $WorkloadId
 * @property int $MilestoneNumber
 * @property list<Shapes\LensReviewSummary> $LensReviewSummaries
 * @property string $NextToken
 */
class ListLensReviewsResponse extends Response
{
}
