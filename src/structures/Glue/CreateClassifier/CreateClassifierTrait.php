<?php

namespace Sunaoka\Aws\Structures\Glue\CreateClassifier;

trait CreateClassifierTrait
{
    /**
     * @param CreateClassifierRequest $args
     * @return CreateClassifierResponse
     */
    public function createClassifier(CreateClassifierRequest $args)
    {
        $result = parent::createClassifier($args->toArray());
        return new CreateClassifierResponse($result->toArray());
    }
}
