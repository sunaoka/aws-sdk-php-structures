<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeByoipCidrs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class DescribeByoipCidrsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     MaxResults: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
