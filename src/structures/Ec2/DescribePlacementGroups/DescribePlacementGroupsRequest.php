<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribePlacementGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $GroupIds
 * @property bool $DryRun
 * @property list<string> $GroupNames
 * @property list<Shapes\Filter> $Filters
 */
class DescribePlacementGroupsRequest extends Request
{
    /**
     * @param array{
     *     GroupIds?: list<string>,
     *     DryRun?: bool,
     *     GroupNames?: list<string>,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
