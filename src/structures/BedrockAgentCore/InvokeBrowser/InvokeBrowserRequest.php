<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeBrowser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $browserIdentifier
 * @property string $sessionId
 * @property Shapes\BrowserAction $action
 */
class InvokeBrowserRequest extends Request
{
    /**
     * @param array{
     *     browserIdentifier: string,
     *     sessionId: string,
     *     action: Shapes\BrowserAction
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
