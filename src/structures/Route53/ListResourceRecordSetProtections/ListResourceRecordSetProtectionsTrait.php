<?php

namespace Sunaoka\Aws\Structures\Route53\ListResourceRecordSetProtections;

trait ListResourceRecordSetProtectionsTrait
{
    /**
     * @param ListResourceRecordSetProtectionsRequest $args
     * @return ListResourceRecordSetProtectionsResponse
     */
    public function listResourceRecordSetProtections(ListResourceRecordSetProtectionsRequest $args)
    {
        $result = parent::listResourceRecordSetProtections($args->toArray());
        return new ListResourceRecordSetProtectionsResponse($result->toArray());
    }
}
