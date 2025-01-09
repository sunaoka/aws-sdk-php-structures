<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateRunCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CACHE_ON_FAILURE'|'CACHE_ALWAYS' $cacheBehavior
 * @property string $description
 * @property string $id
 * @property string $name
 */
class UpdateRunCacheRequest extends Request
{
    /**
     * @param array{
     *     cacheBehavior?: 'CACHE_ON_FAILURE'|'CACHE_ALWAYS',
     *     description?: string,
     *     id: string,
     *     name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
