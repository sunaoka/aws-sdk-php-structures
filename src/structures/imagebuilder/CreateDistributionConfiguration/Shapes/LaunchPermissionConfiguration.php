<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateDistributionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $userIds
 * @property list<string>|null $userGroups
 * @property list<string>|null $organizationArns
 * @property list<string>|null $organizationalUnitArns
 */
class LaunchPermissionConfiguration extends Shape
{
    /**
     * @param array{
     *     userIds?: list<string>|null,
     *     userGroups?: list<string>|null,
     *     organizationArns?: list<string>|null,
     *     organizationalUnitArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
