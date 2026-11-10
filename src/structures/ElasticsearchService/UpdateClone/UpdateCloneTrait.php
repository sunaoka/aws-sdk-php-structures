<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpdateClone;

trait UpdateCloneTrait
{
    /**
     * @param UpdateCloneRequest $args
     * @return UpdateCloneResponse
     */
    public function updateClone(UpdateCloneRequest $args)
    {
        $result = parent::updateClone($args->toArray());
        return new UpdateCloneResponse($result->toArray());
    }
}
