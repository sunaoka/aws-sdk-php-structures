<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBroker;

trait DescribeBrokerTrait
{
    /**
     * @param DescribeBrokerRequest $args
     * @return DescribeBrokerResponse
     */
    public function describeBroker(DescribeBrokerRequest $args)
    {
        $result = parent::describeBroker($args->toArray());
        return new DescribeBrokerResponse($result->toArray());
    }
}
