<?php

namespace Sunaoka\Aws\Structures\Inspector2\SendCisSessionTelemetry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\CisSessionMessage> $messages
 * @property string $scanJobId
 * @property string $sessionToken
 */
class SendCisSessionTelemetryRequest extends Request
{
    /**
     * @param array{
     *     messages: list<Shapes\CisSessionMessage>,
     *     scanJobId: string,
     *     sessionToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
