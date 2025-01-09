<?php

namespace Sunaoka\Aws\Structures\S3\ListBucketAnalyticsConfigurations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $IsTruncated
 * @property string $ContinuationToken
 * @property string $NextContinuationToken
 * @property list<Shapes\AnalyticsConfiguration> $AnalyticsConfigurationList
 */
class ListBucketAnalyticsConfigurationsResponse extends Response
{
}
