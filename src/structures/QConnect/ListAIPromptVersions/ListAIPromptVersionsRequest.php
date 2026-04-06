<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIPromptVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $aiPromptId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property 'SYSTEM'|'CUSTOMER'|null $origin
 */
class ListAIPromptVersionsRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     aiPromptId: string,
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
