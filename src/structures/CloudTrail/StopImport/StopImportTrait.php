<?php

namespace Sunaoka\Aws\Structures\CloudTrail\StopImport;

trait StopImportTrait
{
    /**
     * @param StopImportRequest $args
     * @return StopImportResponse
     */
    public function stopImport(StopImportRequest $args)
    {
        $result = parent::stopImport($args->toArray());
        return new StopImportResponse($result->toArray());
    }
}
