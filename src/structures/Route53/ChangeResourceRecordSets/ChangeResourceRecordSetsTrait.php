<?php

namespace Sunaoka\Aws\Structures\Route53\ChangeResourceRecordSets;

trait ChangeResourceRecordSetsTrait
{
    /**
     * @param ChangeResourceRecordSetsRequest $args
     * @return ChangeResourceRecordSetsResponse
     */
    public function changeResourceRecordSets(ChangeResourceRecordSetsRequest $args)
    {
        $result = parent::changeResourceRecordSets($args->toArray());
        return new ChangeResourceRecordSetsResponse($result->toArray());
    }
}
