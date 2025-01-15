<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLaunchTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string>|null $LaunchTemplateIds
 * @property list<string>|null $LaunchTemplateNames
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 200>|null $MaxResults
 */
class DescribeLaunchTemplatesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     LaunchTemplateIds?: list<string>|null,
     *     LaunchTemplateNames?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 200>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
