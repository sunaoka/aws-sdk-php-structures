<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $userIds
 * @property list<string> $userGroups
 * @property list<string> $organizationArns
 * @property list<string> $organizationalUnitArns
 */
class LaunchPermissionConfiguration extends Shape
{
    /**
     * @param array{
     *     userIds?: list<string>,
     *     userGroups?: list<string>,
     *     organizationArns?: list<string>,
     *     organizationalUnitArns?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
