<?php

namespace Sunaoka\Aws\Structures\Inspector2\SendCisSessionTelemetry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scanJobId
 * @property string $sessionToken
 * @property list<Shapes\CisSessionMessage> $messages
 */
class SendCisSessionTelemetryRequest extends Request
{
    /**
     * @param array{
     *     scanJobId: string,
     *     sessionToken: string,
     *     messages: list<Shapes\CisSessionMessage>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
