<?php

namespace Sunaoka\Aws\Structures\Athena\ListEngineVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 10> $MaxResults
 */
class ListEngineVersionsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 10>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
