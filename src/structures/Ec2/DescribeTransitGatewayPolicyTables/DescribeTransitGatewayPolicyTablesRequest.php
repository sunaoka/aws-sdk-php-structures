<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayPolicyTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TransitGatewayPolicyTableIds
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class DescribeTransitGatewayPolicyTablesRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayPolicyTableIds?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
