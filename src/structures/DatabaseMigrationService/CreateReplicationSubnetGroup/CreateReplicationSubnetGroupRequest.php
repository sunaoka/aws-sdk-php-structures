<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateReplicationSubnetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationSubnetGroupIdentifier
 * @property string $ReplicationSubnetGroupDescription
 * @property list<string> $SubnetIds
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateReplicationSubnetGroupRequest extends Request
{
    /**
     * @param array{
     *     ReplicationSubnetGroupIdentifier: string,
     *     ReplicationSubnetGroupDescription: string,
     *     SubnetIds: list<string>,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
