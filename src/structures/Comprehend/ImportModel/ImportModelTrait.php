<?php

namespace Sunaoka\Aws\Structures\Comprehend\ImportModel;

trait ImportModelTrait
{
    /**
     * @param ImportModelRequest $args
     * @return ImportModelResponse
     */
    public function importModel(ImportModelRequest $args)
    {
        $result = parent::importModel($args->toArray());
        return new ImportModelResponse($result->toArray());
    }
}
