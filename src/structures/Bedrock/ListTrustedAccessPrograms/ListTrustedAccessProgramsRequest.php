<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListTrustedAccessPrograms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $projectIdentifier
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListTrustedAccessProgramsRequest extends Request
{
    /**
     * @param array{
     *     projectIdentifier?: string|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
