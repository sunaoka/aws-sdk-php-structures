<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\NotifyRecommendationsReceived;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property list<string> $recommendationIds
 * @property string $sessionId
 */
class NotifyRecommendationsReceivedRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     recommendationIds: list<string>,
     *     sessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
