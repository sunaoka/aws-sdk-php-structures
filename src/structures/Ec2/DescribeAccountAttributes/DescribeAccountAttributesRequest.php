<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAccountAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<'supported-platforms'|'default-vpc'>|null $AttributeNames
 */
class DescribeAccountAttributesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     AttributeNames?: list<'supported-platforms'|'default-vpc'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
