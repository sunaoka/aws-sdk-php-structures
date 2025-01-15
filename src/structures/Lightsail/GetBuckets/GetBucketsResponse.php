<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBuckets;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Bucket>|null $buckets
 * @property string|null $nextPageToken
 * @property Shapes\AccountLevelBpaSync|null $accountLevelBpaSync
 */
class GetBucketsResponse extends Response
{
}
