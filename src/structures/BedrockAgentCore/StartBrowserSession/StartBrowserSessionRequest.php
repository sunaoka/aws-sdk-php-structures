<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBrowserSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $browserIdentifier
 * @property string|null $name
 * @property int<1, 28800>|null $sessionTimeoutSeconds
 * @property Shapes\ViewPort|null $viewPort
 * @property string|null $clientToken
 */
class StartBrowserSessionRequest extends Request
{
    /**
     * @param array{
     *     browserIdentifier: string,
     *     name?: string|null,
     *     sessionTimeoutSeconds?: int<1, 28800>|null,
     *     viewPort?: Shapes\ViewPort|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
