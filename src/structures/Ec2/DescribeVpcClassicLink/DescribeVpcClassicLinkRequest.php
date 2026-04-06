<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcClassicLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $DryRun
 * @property list<string>|null $VpcIds
 */
class DescribeVpcClassicLinkRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     DryRun?: bool|null,
     *     VpcIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
