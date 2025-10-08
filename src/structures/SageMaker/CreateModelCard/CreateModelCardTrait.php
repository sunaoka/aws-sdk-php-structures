<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelCard;

trait CreateModelCardTrait
{
    /**
     * @param CreateModelCardRequest $args
     * @return CreateModelCardResponse
     */
    public function createModelCard(CreateModelCardRequest $args)
    {
        $result = parent::createModelCard($args->toArray());
        return new CreateModelCardResponse($result->toArray());
    }
}
