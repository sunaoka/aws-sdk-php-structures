<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\UploadEntityDefinitions;

trait UploadEntityDefinitionsTrait
{
    /**
     * @param UploadEntityDefinitionsRequest $args
     * @return UploadEntityDefinitionsResponse
     */
    public function uploadEntityDefinitions(UploadEntityDefinitionsRequest $args)
    {
        $result = parent::uploadEntityDefinitions($args->toArray());
        return new UploadEntityDefinitionsResponse($result->toArray());
    }
}
