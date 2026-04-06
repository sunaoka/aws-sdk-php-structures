<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIGuardrailVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $aiGuardrailId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListAIGuardrailVersionsRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     aiGuardrailId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
