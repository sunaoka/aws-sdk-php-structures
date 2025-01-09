<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ExecutableUsers
 * @property list<string> $ImageIds
 * @property list<string> $Owners
 * @property bool $IncludeDeprecated
 * @property bool $IncludeDisabled
 * @property int $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 */
class DescribeImagesRequest extends Request
{
    /**
     * @param array{
     *     ExecutableUsers?: list<string>,
     *     ImageIds?: list<string>,
     *     Owners?: list<string>,
     *     IncludeDeprecated?: bool,
     *     IncludeDisabled?: bool,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
