<?php

namespace Sunaoka\Aws\Structures\S3\ListBuckets;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Bucket> $Buckets
 * @property Shapes\Owner $Owner
 * @property string $ContinuationToken
 * @property string $Prefix
 */
class ListBucketsResponse extends Response
{
}
