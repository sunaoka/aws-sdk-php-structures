<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListRetrievalInstructions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ACTIVE'|'INACTIVE'|null $status
 * @property int<1, max>|null $maxResults
 * @property string|null $nextToken
 */
class ListRetrievalInstructionsRequest extends Request
{
    /**
     * @param array{
     *     status?: 'ACTIVE'|'INACTIVE'|null,
     *     maxResults?: int<1, max>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
