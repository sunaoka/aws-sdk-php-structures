<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelCards;

trait ListModelCardsTrait
{
    /**
     * @param ListModelCardsRequest $args
     * @return ListModelCardsResponse
     */
    public function listModelCards(ListModelCardsRequest $args)
    {
        $result = parent::listModelCards($args->toArray());
        return new ListModelCardsResponse($result->toArray());
    }
}
