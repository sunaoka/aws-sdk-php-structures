<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListBrowsers;

trait ListBrowsersTrait
{
    /**
     * @param ListBrowsersRequest $args
     * @return ListBrowsersResponse
     */
    public function listBrowsers(ListBrowsersRequest $args)
    {
        $result = parent::listBrowsers($args->toArray());
        return new ListBrowsersResponse($result->toArray());
    }
}
