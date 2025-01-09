<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Hosts
 * @property string $RoleBase
 * @property string $RoleName
 * @property string $RoleSearchMatching
 * @property bool $RoleSearchSubtree
 * @property string $ServiceAccountUsername
 * @property string $UserBase
 * @property string $UserRoleName
 * @property string $UserSearchMatching
 * @property bool $UserSearchSubtree
 */
class AwsAmazonMqBrokerLdapServerMetadataDetails extends Shape
{
    /**
     * @param array{
     *     Hosts?: list<string>,
     *     RoleBase?: string,
     *     RoleName?: string,
     *     RoleSearchMatching?: string,
     *     RoleSearchSubtree?: bool,
     *     ServiceAccountUsername?: string,
     *     UserBase?: string,
     *     UserRoleName?: string,
     *     UserSearchMatching?: string,
     *     UserSearchSubtree?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
