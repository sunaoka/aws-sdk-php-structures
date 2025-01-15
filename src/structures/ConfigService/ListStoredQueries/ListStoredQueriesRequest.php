<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListStoredQueries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<0, 100>|null $MaxResults
 */
class ListStoredQueriesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
