<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateRunCache;

trait UpdateRunCacheTrait
{
    /**
     * @param UpdateRunCacheRequest $args
     * @return void
     */
    public function updateRunCache(UpdateRunCacheRequest $args)
    {
        parent::updateRunCache($args->toArray());
    }
}
