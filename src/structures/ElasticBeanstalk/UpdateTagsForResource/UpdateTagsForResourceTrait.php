<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateTagsForResource;

trait UpdateTagsForResourceTrait
{
    /**
     * @param UpdateTagsForResourceRequest $args
     * @return void
     */
    public function updateTagsForResource(UpdateTagsForResourceRequest $args)
    {
        parent::updateTagsForResource($args->toArray());
    }
}
