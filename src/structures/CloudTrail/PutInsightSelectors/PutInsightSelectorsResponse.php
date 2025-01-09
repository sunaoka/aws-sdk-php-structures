<?php

namespace Sunaoka\Aws\Structures\CloudTrail\PutInsightSelectors;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TrailARN
 * @property list<Shapes\InsightSelector> $InsightSelectors
 * @property string $EventDataStoreArn
 * @property string $InsightsDestination
 */
class PutInsightSelectorsResponse extends Response
{
}
