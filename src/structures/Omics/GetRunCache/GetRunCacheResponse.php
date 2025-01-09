<?php

namespace Sunaoka\Aws\Structures\Omics\GetRunCache;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property 'CACHE_ON_FAILURE'|'CACHE_ALWAYS' $cacheBehavior
 * @property string $cacheBucketOwnerId
 * @property string $cacheS3Uri
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $description
 * @property string $id
 * @property string $name
 * @property 'ACTIVE'|'DELETED'|'FAILED' $status
 * @property array<string, string> $tags
 */
class GetRunCacheResponse extends Response
{
}
