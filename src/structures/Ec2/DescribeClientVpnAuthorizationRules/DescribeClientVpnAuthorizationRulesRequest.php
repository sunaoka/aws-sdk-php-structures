<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnAuthorizationRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientVpnEndpointId
 * @property bool $DryRun
 * @property string $NextToken
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 */
class DescribeClientVpnAuthorizationRulesRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointId: string,
     *     DryRun?: bool,
     *     NextToken?: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
