<?php

namespace Sunaoka\Aws\Structures\QConnect\GetRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $sessionId
 * @property int<1, 100>|null $maxResults
 * @property int<0, 20>|null $waitTimeSeconds
 * @property string|null $nextChunkToken
 */
class GetRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     sessionId: string,
     *     maxResults?: int<1, 100>|null,
     *     waitTimeSeconds?: int<0, 20>|null,
     *     nextChunkToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
