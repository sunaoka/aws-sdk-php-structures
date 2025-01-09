<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIGuardrailVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aiGuardrailId
 * @property string $assistantId
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListAIGuardrailVersionsRequest extends Request
{
    /**
     * @param array{
     *     aiGuardrailId: string,
     *     assistantId: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
