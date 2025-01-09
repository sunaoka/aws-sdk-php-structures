<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\GetRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property int $maxResults
 * @property string $sessionId
 * @property int $waitTimeSeconds
 */
class GetRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     maxResults?: int,
     *     sessionId: string,
     *     waitTimeSeconds?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
