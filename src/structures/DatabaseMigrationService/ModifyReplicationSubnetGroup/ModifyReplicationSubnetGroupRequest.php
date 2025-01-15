<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyReplicationSubnetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationSubnetGroupIdentifier
 * @property string|null $ReplicationSubnetGroupDescription
 * @property list<string> $SubnetIds
 */
class ModifyReplicationSubnetGroupRequest extends Request
{
    /**
     * @param array{
     *     ReplicationSubnetGroupIdentifier: string,
     *     ReplicationSubnetGroupDescription?: string|null,
     *     SubnetIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
