<?php

namespace Sunaoka\Aws\Structures\MWAA\ListEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 25>|null $MaxResults
 * @property string|null $NextToken
 */
class ListEnvironmentsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 25>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
