<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSnapshotTierStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $Filters
 * @property bool $DryRun
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeSnapshotTierStatusRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>,
     *     DryRun?: bool,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
