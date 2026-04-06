<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcClassicLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string>|null $VpcIds
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeVpcClassicLinkRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     VpcIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
