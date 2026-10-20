<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegionName
 * @property 'WAIT_FOR_REPLICATION' $DisassociationMode
 */
class DisassociateReplicationGroupMemberAction extends Shape
{
    /**
     * @param array{
     *     RegionName: string,
     *     DisassociationMode: 'WAIT_FOR_REPLICATION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
