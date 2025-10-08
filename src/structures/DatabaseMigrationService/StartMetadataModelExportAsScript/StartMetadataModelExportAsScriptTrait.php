<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartMetadataModelExportAsScript;

trait StartMetadataModelExportAsScriptTrait
{
    /**
     * @param StartMetadataModelExportAsScriptRequest $args
     * @return StartMetadataModelExportAsScriptResponse
     */
    public function startMetadataModelExportAsScript(StartMetadataModelExportAsScriptRequest $args)
    {
        $result = parent::startMetadataModelExportAsScript($args->toArray());
        return new StartMetadataModelExportAsScriptResponse($result->toArray());
    }
}
