<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeScript;

trait DescribeScriptTrait
{
    /**
     * @param DescribeScriptRequest $args
     * @return DescribeScriptResponse
     */
    public function describeScript(DescribeScriptRequest $args)
    {
        $result = parent::describeScript($args->toArray());
        return new DescribeScriptResponse($result->toArray());
    }
}
