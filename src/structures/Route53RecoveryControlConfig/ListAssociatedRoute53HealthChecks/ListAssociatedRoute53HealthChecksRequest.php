<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\ListAssociatedRoute53HealthChecks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $RoutingControlArn
 */
class ListAssociatedRoute53HealthChecksRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     RoutingControlArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
