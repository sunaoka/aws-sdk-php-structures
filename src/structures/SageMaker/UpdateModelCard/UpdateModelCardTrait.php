<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateModelCard;

trait UpdateModelCardTrait
{
    /**
     * @param UpdateModelCardRequest $args
     * @return UpdateModelCardResponse
     */
    public function updateModelCard(UpdateModelCardRequest $args)
    {
        $result = parent::updateModelCard($args->toArray());
        return new UpdateModelCardResponse($result->toArray());
    }
}
