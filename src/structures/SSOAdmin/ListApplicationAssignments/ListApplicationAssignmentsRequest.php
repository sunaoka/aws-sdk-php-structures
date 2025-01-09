<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationAssignments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListApplicationAssignmentsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationArn: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
