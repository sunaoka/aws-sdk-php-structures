<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListApplicationsFilter $Filter
 * @property string $InstanceArn
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\ListApplicationsFilter,
     *     InstanceArn: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
