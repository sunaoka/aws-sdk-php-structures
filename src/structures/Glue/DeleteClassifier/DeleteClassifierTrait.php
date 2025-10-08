<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteClassifier;

trait DeleteClassifierTrait
{
    /**
     * @param DeleteClassifierRequest $args
     * @return DeleteClassifierResponse
     */
    public function deleteClassifier(DeleteClassifierRequest $args)
    {
        $result = parent::deleteClassifier($args->toArray());
        return new DeleteClassifierResponse($result->toArray());
    }
}
