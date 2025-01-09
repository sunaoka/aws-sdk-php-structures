<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationAssignments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListApplicationAssignmentsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationArn: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
