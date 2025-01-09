<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLaunchTemplateVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $LaunchTemplateId
 * @property string $LaunchTemplateName
 * @property list<string> $Versions
 * @property string $MinVersion
 * @property string $MaxVersion
 * @property string $NextToken
 * @property int $MaxResults
 * @property list<Shapes\Filter> $Filters
 * @property bool $ResolveAlias
 */
class DescribeLaunchTemplateVersionsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     LaunchTemplateId?: string,
     *     LaunchTemplateName?: string,
     *     Versions?: list<string>,
     *     MinVersion?: string,
     *     MaxVersion?: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Filters?: list<Shapes\Filter>,
     *     ResolveAlias?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
