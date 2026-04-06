<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeBundleTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $BundleIds
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeBundleTasksRequest extends Request
{
    /**
     * @param array{
     *     BundleIds?: list<string>|null,
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
