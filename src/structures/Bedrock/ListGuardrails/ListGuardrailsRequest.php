<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListGuardrails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $guardrailIdentifier
 * @property int $maxResults
 * @property string $nextToken
 */
class ListGuardrailsRequest extends Request
{
    /**
     * @param array{
     *     guardrailIdentifier?: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
