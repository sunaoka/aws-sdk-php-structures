<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\ListLinuxSubscriptionInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListLinuxSubscriptionInstancesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
