<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessInstanceLoggingConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $VerifiedAccessInstanceIds
 * @property int<1, 10>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $DryRun
 */
class DescribeVerifiedAccessInstanceLoggingConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessInstanceIds?: list<string>|null,
     *     MaxResults?: int<1, 10>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
