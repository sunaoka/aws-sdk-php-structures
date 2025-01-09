<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListSubscribedWorkteams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NameContains
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListSubscribedWorkteamsRequest extends Request
{
    /**
     * @param array{
     *     NameContains?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
