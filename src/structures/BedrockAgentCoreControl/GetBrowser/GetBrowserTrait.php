<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetBrowser;

trait GetBrowserTrait
{
    /**
     * @param GetBrowserRequest $args
     * @return GetBrowserResponse
     */
    public function getBrowser(GetBrowserRequest $args)
    {
        $result = parent::getBrowser($args->toArray());
        return new GetBrowserResponse($result->toArray());
    }
}
