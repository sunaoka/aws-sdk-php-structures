<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateRunCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CACHE_ON_FAILURE'|'CACHE_ALWAYS'|null $cacheBehavior
 * @property string|null $description
 * @property string $id
 * @property string|null $name
 */
class UpdateRunCacheRequest extends Request
{
    /**
     * @param array{
     *     cacheBehavior?: 'CACHE_ON_FAILURE'|'CACHE_ALWAYS'|null,
     *     description?: string|null,
     *     id: string,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
