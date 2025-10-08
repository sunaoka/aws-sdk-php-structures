<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteBrowser;

trait DeleteBrowserTrait
{
    /**
     * @param DeleteBrowserRequest $args
     * @return DeleteBrowserResponse
     */
    public function deleteBrowser(DeleteBrowserRequest $args)
    {
        $result = parent::deleteBrowser($args->toArray());
        return new DeleteBrowserResponse($result->toArray());
    }
}
