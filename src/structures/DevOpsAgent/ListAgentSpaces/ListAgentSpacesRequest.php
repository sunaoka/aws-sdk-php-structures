<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListAgentSpaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'METADATA_ONLY'|'ALL_DATA'|null $includedData
 */
class ListAgentSpacesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     includedData?: 'METADATA_ONLY'|'ALL_DATA'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
