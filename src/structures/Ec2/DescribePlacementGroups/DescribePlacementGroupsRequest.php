<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribePlacementGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $GroupIds
 * @property bool|null $DryRun
 * @property list<string>|null $GroupNames
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribePlacementGroupsRequest extends Request
{
    /**
     * @param array{
     *     GroupIds?: list<string>|null,
     *     DryRun?: bool|null,
     *     GroupNames?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
