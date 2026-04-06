<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\ExportServerEngineAttribute;

trait ExportServerEngineAttributeTrait
{
    /**
     * @param ExportServerEngineAttributeRequest $args
     * @return ExportServerEngineAttributeResponse
     */
    public function exportServerEngineAttribute(ExportServerEngineAttributeRequest $args)
    {
        $result = parent::exportServerEngineAttribute($args->toArray());
        return new ExportServerEngineAttributeResponse($result->toArray());
    }
}
