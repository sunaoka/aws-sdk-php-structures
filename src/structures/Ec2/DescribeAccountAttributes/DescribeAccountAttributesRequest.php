<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAccountAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'supported-platforms'|'default-vpc'>|null $AttributeNames
 * @property bool|null $DryRun
 */
class DescribeAccountAttributesRequest extends Request
{
    /**
     * @param array{
     *     AttributeNames?: list<'supported-platforms'|'default-vpc'>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
