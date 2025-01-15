<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeByoipCidrs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property int<1, 100> $MaxResults
 * @property string|null $NextToken
 */
class DescribeByoipCidrsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     MaxResults: int<1, 100>,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
