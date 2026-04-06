<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetBrowser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $browserId
 */
class GetBrowserRequest extends Request
{
    /**
     * @param array{browserId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
