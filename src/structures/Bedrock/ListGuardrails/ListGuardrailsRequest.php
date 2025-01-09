<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListGuardrails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $guardrailIdentifier
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class ListGuardrailsRequest extends Request
{
    /**
     * @param array{
     *     guardrailIdentifier?: string,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
