<?php

namespace Sunaoka\Aws\Structures\Omics\CreateRunCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CACHE_ON_FAILURE'|'CACHE_ALWAYS' $cacheBehavior
 * @property string $cacheS3Location
 * @property string $description
 * @property string $name
 * @property string $requestId
 * @property array<string, string> $tags
 * @property string $cacheBucketOwnerId
 */
class CreateRunCacheRequest extends Request
{
    /**
     * @param array{
     *     cacheBehavior?: 'CACHE_ON_FAILURE'|'CACHE_ALWAYS',
     *     cacheS3Location: string,
     *     description?: string,
     *     name?: string,
     *     requestId: string,
     *     tags?: array<string, string>,
     *     cacheBucketOwnerId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
