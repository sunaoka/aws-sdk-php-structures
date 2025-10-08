<?php

namespace Sunaoka\Aws\Structures\S3Tables\DeleteNamespace;

trait DeleteNamespaceTrait
{
    /**
     * @param DeleteNamespaceRequest $args
     * @return void
     */
    public function deleteNamespace(DeleteNamespaceRequest $args)
    {
        parent::deleteNamespace($args->toArray());
    }
}
