<?php

namespace Sunaoka\Aws\Structures\Macie2\DeleteFindingsFilter;

trait DeleteFindingsFilterTrait
{
    /**
     * @param DeleteFindingsFilterRequest $args
     * @return DeleteFindingsFilterResponse
     */
    public function deleteFindingsFilter(DeleteFindingsFilterRequest $args)
    {
        $result = parent::deleteFindingsFilter($args->toArray());
        return new DeleteFindingsFilterResponse($result->toArray());
    }
}
