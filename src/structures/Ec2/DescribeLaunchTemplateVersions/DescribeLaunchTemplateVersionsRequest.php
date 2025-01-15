<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLaunchTemplateVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $LaunchTemplateId
 * @property string|null $LaunchTemplateName
 * @property list<string>|null $Versions
 * @property string|null $MinVersion
 * @property string|null $MaxVersion
 * @property string|null $NextToken
 * @property int|null $MaxResults
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $ResolveAlias
 */
class DescribeLaunchTemplateVersionsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     LaunchTemplateId?: string|null,
     *     LaunchTemplateName?: string|null,
     *     Versions?: list<string>|null,
     *     MinVersion?: string|null,
     *     MaxVersion?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     ResolveAlias?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
