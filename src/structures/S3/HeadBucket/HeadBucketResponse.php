<?php

namespace Sunaoka\Aws\Structures\S3\HeadBucket;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'AvailabilityZone'|'LocalZone' $BucketLocationType
 * @property string $BucketLocationName
 * @property string $BucketRegion
 * @property bool $AccessPointAlias
 */
class HeadBucketResponse extends Response
{
}
