<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Hosts
 * @property string|null $RoleBase
 * @property string|null $RoleName
 * @property string|null $RoleSearchMatching
 * @property bool|null $RoleSearchSubtree
 * @property string|null $ServiceAccountUsername
 * @property string|null $UserBase
 * @property string|null $UserRoleName
 * @property string|null $UserSearchMatching
 * @property bool|null $UserSearchSubtree
 */
class AwsAmazonMqBrokerLdapServerMetadataDetails extends Shape
{
    /**
     * @param array{
     *     Hosts?: list<string>|null,
     *     RoleBase?: string|null,
     *     RoleName?: string|null,
     *     RoleSearchMatching?: string|null,
     *     RoleSearchSubtree?: bool|null,
     *     ServiceAccountUsername?: string|null,
     *     UserBase?: string|null,
     *     UserRoleName?: string|null,
     *     UserSearchMatching?: string|null,
     *     UserSearchSubtree?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
