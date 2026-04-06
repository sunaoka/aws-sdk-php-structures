<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeBundleTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $BundleIds
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $DryRun
 */
class DescribeBundleTasksRequest extends Request
{
    /**
     * @param array{
     *     BundleIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
