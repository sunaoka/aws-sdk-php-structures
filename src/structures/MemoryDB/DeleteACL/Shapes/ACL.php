<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DeleteACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Status
 * @property list<string> $UserNames
 * @property string $MinimumEngineVersion
 * @property ACLPendingChanges $PendingChanges
 * @property list<string> $Clusters
 * @property string $ARN
 */
class ACL extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Status?: string,
     *     UserNames?: list<string>,
     *     MinimumEngineVersion?: string,
     *     PendingChanges?: ACLPendingChanges,
     *     Clusters?: list<string>,
     *     ARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
