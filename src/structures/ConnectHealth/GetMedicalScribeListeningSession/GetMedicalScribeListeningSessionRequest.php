<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetMedicalScribeListeningSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sessionId
 * @property string $domainId
 * @property string $subscriptionId
 */
class GetMedicalScribeListeningSessionRequest extends Request
{
    /**
     * @param array{
     *     sessionId: string,
     *     domainId: string,
     *     subscriptionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
