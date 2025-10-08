<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ListSchemaExtensions;

trait ListSchemaExtensionsTrait
{
    /**
     * @param ListSchemaExtensionsRequest $args
     * @return ListSchemaExtensionsResponse
     */
    public function listSchemaExtensions(ListSchemaExtensionsRequest $args)
    {
        $result = parent::listSchemaExtensions($args->toArray());
        return new ListSchemaExtensionsResponse($result->toArray());
    }
}
