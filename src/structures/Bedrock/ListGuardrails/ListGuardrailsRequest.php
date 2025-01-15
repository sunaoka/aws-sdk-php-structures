<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListGuardrails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $guardrailIdentifier
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListGuardrailsRequest extends Request
{
    /**
     * @param array{
     *     guardrailIdentifier?: string|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
