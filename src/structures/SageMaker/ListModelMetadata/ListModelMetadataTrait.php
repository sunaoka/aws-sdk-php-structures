<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelMetadata;

trait ListModelMetadataTrait
{
    /**
     * @param ListModelMetadataRequest $args
     * @return ListModelMetadataResponse
     */
    public function listModelMetadata(ListModelMetadataRequest $args)
    {
        $result = parent::listModelMetadata($args->toArray());
        return new ListModelMetadataResponse($result->toArray());
    }
}
