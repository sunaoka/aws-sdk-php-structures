<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIPrompts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property 'SYSTEM'|'CUSTOMER'|null $origin
 */
class ListAIPromptsRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     origin?: 'SYSTEM'|'CUSTOMER'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
