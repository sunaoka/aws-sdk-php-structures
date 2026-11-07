<?php

namespace Sunaoka\Aws\Structures\Athena\ListSystemTableStatuses;

trait ListSystemTableStatusesTrait
{
    /**
     * @param ListSystemTableStatusesRequest $args
     * @return ListSystemTableStatusesResponse
     */
    public function listSystemTableStatuses(ListSystemTableStatusesRequest $args)
    {
        $result = parent::listSystemTableStatuses($args->toArray());
        return new ListSystemTableStatusesResponse($result->toArray());
    }
}
