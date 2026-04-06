<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIPromptVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aiPromptId
 * @property string $assistantId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'SYSTEM'|'CUSTOMER'|null $origin
 */
class ListAIPromptVersionsRequest extends Request
{
    /**
     * @param array{
     *     aiPromptId: string,
     *     assistantId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     origin?: 'SYSTEM'|'CUSTOMER'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
