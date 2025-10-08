<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DeleteFilter;

trait DeleteFilterTrait
{
    /**
     * @param DeleteFilterRequest $args
     * @return DeleteFilterResponse
     */
    public function deleteFilter(DeleteFilterRequest $args)
    {
        $result = parent::deleteFilter($args->toArray());
        return new DeleteFilterResponse($result->toArray());
    }
}
