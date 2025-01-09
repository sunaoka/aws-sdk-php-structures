<?php

namespace Sunaoka\Aws\Structures\S3\ListBucketMetricsConfigurations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $IsTruncated
 * @property string $ContinuationToken
 * @property string $NextContinuationToken
 * @property list<Shapes\MetricsConfiguration> $MetricsConfigurationList
 */
class ListBucketMetricsConfigurationsResponse extends Response
{
}
