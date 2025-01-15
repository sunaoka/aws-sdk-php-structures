<?php

namespace Sunaoka\Aws\Structures\S3\ListBucketAnalyticsConfigurations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $IsTruncated
 * @property string|null $ContinuationToken
 * @property string|null $NextContinuationToken
 * @property list<Shapes\AnalyticsConfiguration>|null $AnalyticsConfigurationList
 */
class ListBucketAnalyticsConfigurationsResponse extends Response
{
}
