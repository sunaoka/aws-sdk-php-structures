<?php

namespace Sunaoka\Aws\Structures\Omics\CreateRunCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CACHE_ON_FAILURE'|'CACHE_ALWAYS'|null $cacheBehavior
 * @property string $cacheS3Location
 * @property string|null $description
 * @property string|null $name
 * @property string $requestId
 * @property array<string, string>|null $tags
 * @property string|null $cacheBucketOwnerId
 */
class CreateRunCacheRequest extends Request
{
    /**
     * @param array{
     *     cacheBehavior?: 'CACHE_ON_FAILURE'|'CACHE_ALWAYS'|null,
     *     cacheS3Location: string,
     *     description?: string|null,
     *     name?: string|null,
     *     requestId: string,
     *     tags?: array<string, string>|null,
     *     cacheBucketOwnerId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
