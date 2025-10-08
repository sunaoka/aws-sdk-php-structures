<?php

namespace Sunaoka\Aws\Structures\PcaConnectorScep\UntagResource;

trait UntagResourceTrait
{
    /**
     * @param UntagResourceRequest $args
     * @return void
     */
    public function untagResource(UntagResourceRequest $args)
    {
        parent::untagResource($args->toArray());
    }
}
