<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\ListApplicationsFilter|null $Filter
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Filter?: Shapes\ListApplicationsFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
