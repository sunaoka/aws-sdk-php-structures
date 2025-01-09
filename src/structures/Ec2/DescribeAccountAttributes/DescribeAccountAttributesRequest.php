<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAccountAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<'supported-platforms'|'default-vpc'> $AttributeNames
 */
class DescribeAccountAttributesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     AttributeNames?: list<'supported-platforms'|'default-vpc'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
