<?php

namespace Sunaoka\Aws\Structures\S3\ListBuckets;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Bucket>|null $Buckets
 * @property Shapes\Owner|null $Owner
 * @property string|null $ContinuationToken
 * @property string|null $Prefix
 */
class ListBucketsResponse extends Response
{
}
