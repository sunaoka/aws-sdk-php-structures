<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBrokerInstanceOptions;

trait DescribeBrokerInstanceOptionsTrait
{
    /**
     * @param DescribeBrokerInstanceOptionsRequest $args
     * @return DescribeBrokerInstanceOptionsResponse
     */
    public function describeBrokerInstanceOptions(DescribeBrokerInstanceOptionsRequest $args)
    {
        $result = parent::describeBrokerInstanceOptions($args->toArray());
        return new DescribeBrokerInstanceOptionsResponse($result->toArray());
    }
}
