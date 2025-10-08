<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateClassifier;

trait UpdateClassifierTrait
{
    /**
     * @param UpdateClassifierRequest $args
     * @return UpdateClassifierResponse
     */
    public function updateClassifier(UpdateClassifierRequest $args)
    {
        $result = parent::updateClassifier($args->toArray());
        return new UpdateClassifierResponse($result->toArray());
    }
}
