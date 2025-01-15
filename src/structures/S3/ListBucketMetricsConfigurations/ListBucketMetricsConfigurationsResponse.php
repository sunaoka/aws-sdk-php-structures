<?php

namespace Sunaoka\Aws\Structures\S3\ListBucketMetricsConfigurations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $IsTruncated
 * @property string|null $ContinuationToken
 * @property string|null $NextContinuationToken
 * @property list<Shapes\MetricsConfiguration>|null $MetricsConfigurationList
 */
class ListBucketMetricsConfigurationsResponse extends Response
{
}
