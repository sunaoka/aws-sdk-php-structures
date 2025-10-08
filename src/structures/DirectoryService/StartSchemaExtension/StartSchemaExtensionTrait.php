<?php

namespace Sunaoka\Aws\Structures\DirectoryService\StartSchemaExtension;

trait StartSchemaExtensionTrait
{
    /**
     * @param StartSchemaExtensionRequest $args
     * @return StartSchemaExtensionResponse
     */
    public function startSchemaExtension(StartSchemaExtensionRequest $args)
    {
        $result = parent::startSchemaExtension($args->toArray());
        return new StartSchemaExtensionResponse($result->toArray());
    }
}
