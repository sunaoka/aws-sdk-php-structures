<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationAssignments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListApplicationAssignmentsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationArn: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
