<?php

namespace Sunaoka\Aws\Structures\Budgets\CreateSubscriber;

trait CreateSubscriberTrait
{
    /**
     * @param CreateSubscriberRequest $args
     * @return CreateSubscriberResponse
     */
    public function createSubscriber(CreateSubscriberRequest $args)
    {
        $result = parent::createSubscriber($args->toArray());
        return new CreateSubscriberResponse($result->toArray());
    }
}
