<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeBrowser;

trait InvokeBrowserTrait
{
    /**
     * @param InvokeBrowserRequest $args
     * @return InvokeBrowserResponse
     */
    public function invokeBrowser(InvokeBrowserRequest $args)
    {
        $result = parent::invokeBrowser($args->toArray());
        return new InvokeBrowserResponse($result->toArray());
    }
}
