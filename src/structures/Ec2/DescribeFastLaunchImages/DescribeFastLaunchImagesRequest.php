<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFastLaunchImages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ImageIds
 * @property list<Shapes\Filter> $Filters
 * @property int<0, 200> $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class DescribeFastLaunchImagesRequest extends Request
{
    /**
     * @param array{
     *     ImageIds?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int<0, 200>,
     *     NextToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
