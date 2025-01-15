<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\ListAssociatedRoute53HealthChecks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property string $RoutingControlArn
 */
class ListAssociatedRoute53HealthChecksRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     RoutingControlArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
