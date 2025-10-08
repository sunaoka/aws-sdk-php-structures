<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteHubContentReference;

trait DeleteHubContentReferenceTrait
{
    /**
     * @param DeleteHubContentReferenceRequest $args
     * @return void
     */
    public function deleteHubContentReference(DeleteHubContentReferenceRequest $args)
    {
        parent::deleteHubContentReference($args->toArray());
    }
}
