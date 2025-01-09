<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessInstanceLoggingConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $VerifiedAccessInstanceIds
 * @property int<1, 10> $MaxResults
 * @property string $NextToken
 * @property list<Shapes\Filter> $Filters
 * @property bool $DryRun
 */
class DescribeVerifiedAccessInstanceLoggingConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessInstanceIds?: list<string>,
     *     MaxResults?: int<1, 10>,
     *     NextToken?: string,
     *     Filters?: list<Shapes\Filter>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
