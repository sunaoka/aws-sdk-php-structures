<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLaunchTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<string> $LaunchTemplateIds
 * @property list<string> $LaunchTemplateNames
 * @property list<Shapes\Filter> $Filters
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeLaunchTemplatesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     LaunchTemplateIds?: list<string>,
     *     LaunchTemplateNames?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
