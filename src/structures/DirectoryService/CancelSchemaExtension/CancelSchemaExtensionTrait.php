<?php

namespace Sunaoka\Aws\Structures\DirectoryService\CancelSchemaExtension;

trait CancelSchemaExtensionTrait
{
    /**
     * @param CancelSchemaExtensionRequest $args
     * @return CancelSchemaExtensionResponse
     */
    public function cancelSchemaExtension(CancelSchemaExtensionRequest $args)
    {
        $result = parent::cancelSchemaExtension($args->toArray());
        return new CancelSchemaExtensionResponse($result->toArray());
    }
}
