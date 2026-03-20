<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartCodeInterpreterSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $traceId
 * @property string|null $traceParent
 * @property string $codeInterpreterIdentifier
 * @property string|null $name
 * @property int<1, 28800>|null $sessionTimeoutSeconds
 * @property list<Shapes\Certificate>|null $certificates
 * @property string|null $clientToken
 */
class StartCodeInterpreterSessionRequest extends Request
{
    /**
     * @param array{
     *     traceId?: string|null,
     *     traceParent?: string|null,
     *     codeInterpreterIdentifier: string,
     *     name?: string|null,
     *     sessionTimeoutSeconds?: int<1, 28800>|null,
     *     certificates?: list<Shapes\Certificate>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
