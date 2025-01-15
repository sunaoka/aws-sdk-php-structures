<?php

namespace Sunaoka\Aws\Structures\Omics\GetRunCache;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property 'CACHE_ON_FAILURE'|'CACHE_ALWAYS'|null $cacheBehavior
 * @property string|null $cacheBucketOwnerId
 * @property string|null $cacheS3Uri
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property string|null $description
 * @property string|null $id
 * @property string|null $name
 * @property 'ACTIVE'|'DELETED'|'FAILED'|null $status
 * @property array<string, string>|null $tags
 */
class GetRunCacheResponse extends Response
{
}
