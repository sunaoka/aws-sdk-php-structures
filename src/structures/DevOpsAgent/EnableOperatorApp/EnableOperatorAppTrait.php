<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\EnableOperatorApp;

trait EnableOperatorAppTrait
{
    /**
     * @param EnableOperatorAppRequest $args
     * @return EnableOperatorAppResponse
     */
    public function enableOperatorApp(EnableOperatorAppRequest $args)
    {
        $result = parent::enableOperatorApp($args->toArray());
        return new EnableOperatorAppResponse($result->toArray());
    }
}
