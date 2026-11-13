<?php

namespace Sunaoka\Aws\Structures\Route53\CreateResourceRecordSetProtections;

trait CreateResourceRecordSetProtectionsTrait
{
    /**
     * @param CreateResourceRecordSetProtectionsRequest $args
     * @return CreateResourceRecordSetProtectionsResponse
     */
    public function createResourceRecordSetProtections(CreateResourceRecordSetProtectionsRequest $args)
    {
        $result = parent::createResourceRecordSetProtections($args->toArray());
        return new CreateResourceRecordSetProtectionsResponse($result->toArray());
    }
}
