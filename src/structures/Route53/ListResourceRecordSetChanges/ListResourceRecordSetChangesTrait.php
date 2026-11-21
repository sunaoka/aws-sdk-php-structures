<?php

namespace Sunaoka\Aws\Structures\Route53\ListResourceRecordSetChanges;

trait ListResourceRecordSetChangesTrait
{
    /**
     * @param ListResourceRecordSetChangesRequest $args
     * @return ListResourceRecordSetChangesResponse
     */
    public function listResourceRecordSetChanges(ListResourceRecordSetChangesRequest $args)
    {
        $result = parent::listResourceRecordSetChanges($args->toArray());
        return new ListResourceRecordSetChangesResponse($result->toArray());
    }
}
