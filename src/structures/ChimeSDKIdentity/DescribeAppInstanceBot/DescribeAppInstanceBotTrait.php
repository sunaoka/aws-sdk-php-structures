<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DescribeAppInstanceBot;

trait DescribeAppInstanceBotTrait
{
    /**
     * @param DescribeAppInstanceBotRequest $args
     * @return DescribeAppInstanceBotResponse
     */
    public function describeAppInstanceBot(DescribeAppInstanceBotRequest $args)
    {
        $result = parent::describeAppInstanceBot($args->toArray());
        return new DescribeAppInstanceBotResponse($result->toArray());
    }
}
