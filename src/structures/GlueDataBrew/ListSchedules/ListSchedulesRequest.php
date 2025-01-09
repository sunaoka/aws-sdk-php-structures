<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListSchedules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListSchedulesRequest extends Request
{
    /**
     * @param array{
     *     JobName?: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
