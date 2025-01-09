<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcClassicLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<string> $VpcIds
 * @property list<Shapes\Filter> $Filters
 */
class DescribeVpcClassicLinkRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     VpcIds?: list<string>,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
