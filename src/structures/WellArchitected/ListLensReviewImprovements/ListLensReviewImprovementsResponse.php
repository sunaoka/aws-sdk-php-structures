<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListLensReviewImprovements;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $WorkloadId
 * @property int $MilestoneNumber
 * @property string $LensAlias
 * @property string $LensArn
 * @property list<Shapes\ImprovementSummary> $ImprovementSummaries
 * @property string $NextToken
 */
class ListLensReviewImprovementsResponse extends Response
{
}
