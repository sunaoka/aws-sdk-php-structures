<?php

namespace Sunaoka\Aws\Structures\QConnect\NotifyRecommendationsReceived;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $sessionId
 * @property list<string> $recommendationIds
 */
class NotifyRecommendationsReceivedRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     sessionId: string,
     *     recommendationIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
