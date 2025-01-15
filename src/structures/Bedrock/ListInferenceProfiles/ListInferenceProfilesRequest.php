<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListInferenceProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property 'SYSTEM_DEFINED'|'APPLICATION'|null $typeEquals
 */
class ListInferenceProfilesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     typeEquals?: 'SYSTEM_DEFINED'|'APPLICATION'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
