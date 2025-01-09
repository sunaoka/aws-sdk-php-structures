<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIPromptVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aiPromptId
 * @property string $assistantId
 * @property int $maxResults
 * @property string $nextToken
 * @property 'SYSTEM'|'CUSTOMER' $origin
 */
class ListAIPromptVersionsRequest extends Request
{
    /**
     * @param array{
     *     aiPromptId: string,
     *     assistantId: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     origin?: 'SYSTEM'|'CUSTOMER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
