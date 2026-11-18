<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationMapperSegmentConstructs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $cidrs
 * @property list<string>|null $vmUUIDs
 * @property list<string>|null $userProvidedIDs
 */
class SecurityGroupAssociations extends Shape
{
    /**
     * @param array{
     *     cidrs?: list<string>|null,
     *     vmUUIDs?: list<string>|null,
     *     userProvidedIDs?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
