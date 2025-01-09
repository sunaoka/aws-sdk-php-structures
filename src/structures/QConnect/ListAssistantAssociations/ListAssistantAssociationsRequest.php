<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAssistantAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property int $maxResults
 * @property string $nextToken
 */
class ListAssistantAssociationsRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
