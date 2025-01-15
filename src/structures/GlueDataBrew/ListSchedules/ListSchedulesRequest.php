<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListSchedules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $JobName
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListSchedulesRequest extends Request
{
    /**
     * @param array{
     *     JobName?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
