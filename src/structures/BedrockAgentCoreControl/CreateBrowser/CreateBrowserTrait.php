<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateBrowser;

trait CreateBrowserTrait
{
    /**
     * @param CreateBrowserRequest $args
     * @return CreateBrowserResponse
     */
    public function createBrowser(CreateBrowserRequest $args)
    {
        $result = parent::createBrowser($args->toArray());
        return new CreateBrowserResponse($result->toArray());
    }
}
