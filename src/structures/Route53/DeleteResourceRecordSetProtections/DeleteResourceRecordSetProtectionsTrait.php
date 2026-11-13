<?php

namespace Sunaoka\Aws\Structures\Route53\DeleteResourceRecordSetProtections;

trait DeleteResourceRecordSetProtectionsTrait
{
    /**
     * @param DeleteResourceRecordSetProtectionsRequest $args
     * @return DeleteResourceRecordSetProtectionsResponse
     */
    public function deleteResourceRecordSetProtections(DeleteResourceRecordSetProtectionsRequest $args)
    {
        $result = parent::deleteResourceRecordSetProtections($args->toArray());
        return new DeleteResourceRecordSetProtectionsResponse($result->toArray());
    }
}
