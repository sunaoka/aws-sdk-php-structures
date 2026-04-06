<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteCapacityManagerDataExport;

trait DeleteCapacityManagerDataExportTrait
{
    /**
     * @param DeleteCapacityManagerDataExportRequest $args
     * @return DeleteCapacityManagerDataExportResponse
     */
    public function deleteCapacityManagerDataExport(DeleteCapacityManagerDataExportRequest $args)
    {
        $result = parent::deleteCapacityManagerDataExport($args->toArray());
        return new DeleteCapacityManagerDataExportResponse($result->toArray());
    }
}
