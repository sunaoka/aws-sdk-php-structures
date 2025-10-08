<?php

namespace Sunaoka\Aws\Structures\Glue\StartImportLabelsTaskRun;

trait StartImportLabelsTaskRunTrait
{
    /**
     * @param StartImportLabelsTaskRunRequest $args
     * @return StartImportLabelsTaskRunResponse
     */
    public function startImportLabelsTaskRun(StartImportLabelsTaskRunRequest $args)
    {
        $result = parent::startImportLabelsTaskRun($args->toArray());
        return new StartImportLabelsTaskRunResponse($result->toArray());
    }
}
