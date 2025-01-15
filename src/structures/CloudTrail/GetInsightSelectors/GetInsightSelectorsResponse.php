<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetInsightSelectors;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TrailARN
 * @property list<Shapes\InsightSelector>|null $InsightSelectors
 * @property string|null $EventDataStoreArn
 * @property string|null $InsightsDestination
 */
class GetInsightSelectorsResponse extends Response
{
}
