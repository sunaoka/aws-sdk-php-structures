<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAddressesAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AllocationIds
 * @property 'domain-name' $Attribute
 * @property string $NextToken
 * @property int $MaxResults
 * @property bool $DryRun
 */
class DescribeAddressesAttributeRequest extends Request
{
    /**
     * @param array{
     *     AllocationIds?: list<string>,
     *     Attribute?: 'domain-name',
     *     NextToken?: string,
     *     MaxResults?: int,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
