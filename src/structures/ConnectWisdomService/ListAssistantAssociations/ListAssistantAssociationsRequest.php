<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\ListAssistantAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListAssistantAssociationsRequest extends Request
{
    /**
     * @param array{
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
