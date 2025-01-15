<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAddressesAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $AllocationIds
 * @property 'domain-name'|null $Attribute
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property bool|null $DryRun
 */
class DescribeAddressesAttributeRequest extends Request
{
    /**
     * @param array{
     *     AllocationIds?: list<string>|null,
     *     Attribute?: 'domain-name'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
