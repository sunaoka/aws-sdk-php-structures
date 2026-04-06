<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ExecutableUsers
 * @property list<Shapes\Filter>|null $Filters
 * @property list<string>|null $ImageIds
 * @property list<string>|null $Owners
 * @property bool|null $IncludeDeprecated
 * @property bool|null $DryRun
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeImagesRequest extends Request
{
    /**
     * @param array{
     *     ExecutableUsers?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     ImageIds?: list<string>|null,
     *     Owners?: list<string>|null,
     *     IncludeDeprecated?: bool|null,
     *     DryRun?: bool|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
