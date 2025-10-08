<?php

namespace Sunaoka\Aws\Structures\Route53\ListResourceRecordSets;

trait ListResourceRecordSetsTrait
{
    /**
     * @param ListResourceRecordSetsRequest $args
     * @return ListResourceRecordSetsResponse
     */
    public function listResourceRecordSets(ListResourceRecordSetsRequest $args)
    {
        $result = parent::listResourceRecordSets($args->toArray());
        return new ListResourceRecordSetsResponse($result->toArray());
    }
}
