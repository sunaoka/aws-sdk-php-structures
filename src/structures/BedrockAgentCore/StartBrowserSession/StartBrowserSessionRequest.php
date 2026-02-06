<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBrowserSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $traceId
 * @property string|null $traceParent
 * @property string $browserIdentifier
 * @property string|null $name
 * @property int<1, 28800>|null $sessionTimeoutSeconds
 * @property Shapes\ViewPort|null $viewPort
 * @property list<Shapes\BrowserExtension>|null $extensions
 * @property Shapes\BrowserProfileConfiguration|null $profileConfiguration
 * @property string|null $clientToken
 */
class StartBrowserSessionRequest extends Request
{
    /**
     * @param array{
     *     traceId?: string|null,
     *     traceParent?: string|null,
     *     browserIdentifier: string,
     *     name?: string|null,
     *     sessionTimeoutSeconds?: int<1, 28800>|null,
     *     viewPort?: Shapes\ViewPort|null,
     *     extensions?: list<Shapes\BrowserExtension>|null,
     *     profileConfiguration?: Shapes\BrowserProfileConfiguration|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
