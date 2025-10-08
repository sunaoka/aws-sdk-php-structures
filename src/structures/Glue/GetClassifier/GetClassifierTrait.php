<?php

namespace Sunaoka\Aws\Structures\Glue\GetClassifier;

trait GetClassifierTrait
{
    /**
     * @param GetClassifierRequest $args
     * @return GetClassifierResponse
     */
    public function getClassifier(GetClassifierRequest $args)
    {
        $result = parent::getClassifier($args->toArray());
        return new GetClassifierResponse($result->toArray());
    }
}
