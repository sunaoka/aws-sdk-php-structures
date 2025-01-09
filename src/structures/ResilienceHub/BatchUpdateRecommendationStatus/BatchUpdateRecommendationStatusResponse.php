<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\BatchUpdateRecommendationStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $appArn
 * @property list<Shapes\BatchUpdateRecommendationStatusFailedEntry> $failedEntries
 * @property list<Shapes\BatchUpdateRecommendationStatusSuccessfulEntry> $successfulEntries
 */
class BatchUpdateRecommendationStatusResponse extends Response
{
}
