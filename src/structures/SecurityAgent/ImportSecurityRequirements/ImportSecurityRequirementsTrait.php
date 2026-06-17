<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ImportSecurityRequirements;

trait ImportSecurityRequirementsTrait
{
    /**
     * @param ImportSecurityRequirementsRequest $args
     * @return ImportSecurityRequirementsResponse
     */
    public function importSecurityRequirements(ImportSecurityRequirementsRequest $args)
    {
        $result = parent::importSecurityRequirements($args->toArray());
        return new ImportSecurityRequirementsResponse($result->toArray());
    }
}
