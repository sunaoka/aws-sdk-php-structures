<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ExportComponents;

trait ExportComponentsTrait
{
    /**
     * @param ExportComponentsRequest $args
     * @return ExportComponentsResponse
     */
    public function exportComponents(ExportComponentsRequest $args)
    {
        $result = parent::exportComponents($args->toArray());
        return new ExportComponentsResponse($result->toArray());
    }
}
