<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCoipPoolUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolId
 * @property list<Shapes\Filter> $Filters
 * @property int<5, 1000> $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class GetCoipPoolUsageRequest extends Request
{
    /**
     * @param array{
     *     PoolId: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int<5, 1000>,
     *     NextToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
