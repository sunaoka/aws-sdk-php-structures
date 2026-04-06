<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribePlacementGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $DryRun
 * @property list<string>|null $GroupNames
 * @property list<string>|null $GroupIds
 */
class DescribePlacementGroupsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     DryRun?: bool|null,
     *     GroupNames?: list<string>|null,
     *     GroupIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
