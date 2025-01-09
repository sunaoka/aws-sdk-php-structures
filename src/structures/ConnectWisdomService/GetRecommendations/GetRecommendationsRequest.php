<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\GetRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property int<1, 100> $maxResults
 * @property string $sessionId
 * @property int<0, 20> $waitTimeSeconds
 */
class GetRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     maxResults?: int<1, 100>,
     *     sessionId: string,
     *     waitTimeSeconds?: int<0, 20>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
