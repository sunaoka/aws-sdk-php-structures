<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListRetrievalInstructionVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $retrievalInstructionId
 * @property int<1, max>|null $maxResults
 * @property string|null $nextToken
 */
class ListRetrievalInstructionVersionsRequest extends Request
{
    /**
     * @param array{
     *     retrievalInstructionId: string,
     *     maxResults?: int<1, max>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
