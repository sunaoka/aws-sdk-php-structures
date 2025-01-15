<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListSubscribedWorkteams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NameContains
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListSubscribedWorkteamsRequest extends Request
{
    /**
     * @param array{
     *     NameContains?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
