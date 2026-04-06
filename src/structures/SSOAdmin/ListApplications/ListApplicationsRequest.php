<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListApplicationsFilter|null $Filter
 * @property string $InstanceArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\ListApplicationsFilter|null,
     *     InstanceArn: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
