<?php

namespace Sunaoka\Aws\Structures\S3\HeadBucket;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'AvailabilityZone'|'LocalZone'|null $BucketLocationType
 * @property string|null $BucketLocationName
 * @property string|null $BucketRegion
 * @property bool|null $AccessPointAlias
 */
class HeadBucketResponse extends Response
{
}
