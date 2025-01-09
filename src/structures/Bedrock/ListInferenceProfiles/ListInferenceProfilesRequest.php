<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListInferenceProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property 'SYSTEM_DEFINED'|'APPLICATION' $typeEquals
 */
class ListInferenceProfilesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     typeEquals?: 'SYSTEM_DEFINED'|'APPLICATION'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
