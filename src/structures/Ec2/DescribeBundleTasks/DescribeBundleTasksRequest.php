<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeBundleTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $BundleIds
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 */
class DescribeBundleTasksRequest extends Request
{
    /**
     * @param array{
     *     BundleIds?: list<string>,
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
