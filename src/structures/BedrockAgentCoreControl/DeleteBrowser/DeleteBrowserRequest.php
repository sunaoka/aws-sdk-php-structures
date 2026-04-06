<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteBrowser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $browserId
 * @property string|null $clientToken
 */
class DeleteBrowserRequest extends Request
{
    /**
     * @param array{
     *     browserId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
