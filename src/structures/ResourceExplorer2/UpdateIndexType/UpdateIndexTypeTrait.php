<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\UpdateIndexType;

trait UpdateIndexTypeTrait
{
    /**
     * @param UpdateIndexTypeRequest $args
     * @return UpdateIndexTypeResponse
     */
    public function updateIndexType(UpdateIndexTypeRequest $args)
    {
        $result = parent::updateIndexType($args->toArray());
        return new UpdateIndexTypeResponse($result->toArray());
    }
}
