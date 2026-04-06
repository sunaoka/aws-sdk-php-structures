<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteRunCache;

trait DeleteRunCacheTrait
{
    /**
     * @param DeleteRunCacheRequest $args
     * @return void
     */
    public function deleteRunCache(DeleteRunCacheRequest $args)
    {
        parent::deleteRunCache($args->toArray());
    }
}
