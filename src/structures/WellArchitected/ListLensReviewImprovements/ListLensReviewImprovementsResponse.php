<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListLensReviewImprovements;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $WorkloadId
 * @property int<1, 100>|null $MilestoneNumber
 * @property string|null $LensAlias
 * @property string|null $LensArn
 * @property list<Shapes\ImprovementSummary>|null $ImprovementSummaries
 * @property string|null $NextToken
 */
class ListLensReviewImprovementsResponse extends Response
{
}
