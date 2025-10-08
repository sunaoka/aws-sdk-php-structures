<?php

namespace Sunaoka\Aws\Structures\Glue\StartExportLabelsTaskRun;

trait StartExportLabelsTaskRunTrait
{
    /**
     * @param StartExportLabelsTaskRunRequest $args
     * @return StartExportLabelsTaskRunResponse
     */
    public function startExportLabelsTaskRun(StartExportLabelsTaskRunRequest $args)
    {
        $result = parent::startExportLabelsTaskRun($args->toArray());
        return new StartExportLabelsTaskRunResponse($result->toArray());
    }
}
