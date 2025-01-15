<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ExecutableUsers
 * @property list<string>|null $ImageIds
 * @property list<string>|null $Owners
 * @property bool|null $IncludeDeprecated
 * @property bool|null $IncludeDisabled
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeImagesRequest extends Request
{
    /**
     * @param array{
     *     ExecutableUsers?: list<string>|null,
     *     ImageIds?: list<string>|null,
     *     Owners?: list<string>|null,
     *     IncludeDeprecated?: bool|null,
     *     IncludeDisabled?: bool|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null,
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
