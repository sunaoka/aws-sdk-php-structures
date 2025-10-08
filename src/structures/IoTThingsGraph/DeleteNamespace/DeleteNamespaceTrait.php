<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\DeleteNamespace;

trait DeleteNamespaceTrait
{
    /**
     * @param DeleteNamespaceRequest $args
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespace(DeleteNamespaceRequest $args)
    {
        $result = parent::deleteNamespace($args->toArray());
        return new DeleteNamespaceResponse($result->toArray());
    }
}
