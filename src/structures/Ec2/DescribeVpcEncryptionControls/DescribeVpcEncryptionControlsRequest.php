<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEncryptionControls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 * @property list<string>|null $VpcEncryptionControlIds
 * @property list<string>|null $VpcIds
 * @property string|null $NextToken
 * @property int<5, 1000>|null $MaxResults
 */
class DescribeVpcEncryptionControlsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     VpcEncryptionControlIds?: list<string>|null,
     *     VpcIds?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<5, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
