<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCapacityManagerDataExport;

trait CreateCapacityManagerDataExportTrait
{
    /**
     * @param CreateCapacityManagerDataExportRequest $args
     * @return CreateCapacityManagerDataExportResponse
     */
    public function createCapacityManagerDataExport(CreateCapacityManagerDataExportRequest $args)
    {
        $result = parent::createCapacityManagerDataExport($args->toArray());
        return new CreateCapacityManagerDataExportResponse($result->toArray());
    }
}
