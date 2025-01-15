<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBroker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Hosts
 * @property string $RoleBase
 * @property string|null $RoleName
 * @property string $RoleSearchMatching
 * @property bool|null $RoleSearchSubtree
 * @property string $ServiceAccountUsername
 * @property string $UserBase
 * @property string|null $UserRoleName
 * @property string $UserSearchMatching
 * @property bool|null $UserSearchSubtree
 */
class LdapServerMetadataOutput extends Shape
{
    /**
     * @param array{
     *     Hosts: list<string>,
     *     RoleBase: string,
     *     RoleName?: string|null,
     *     RoleSearchMatching: string,
     *     RoleSearchSubtree?: bool|null,
     *     ServiceAccountUsername: string,
     *     UserBase: string,
     *     UserRoleName?: string|null,
     *     UserSearchMatching: string,
     *     UserSearchSubtree?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
