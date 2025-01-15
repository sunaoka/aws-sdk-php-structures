<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DeleteACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Status
 * @property list<string>|null $UserNames
 * @property string|null $MinimumEngineVersion
 * @property ACLPendingChanges|null $PendingChanges
 * @property list<string>|null $Clusters
 * @property string|null $ARN
 */
class ACL extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Status?: string|null,
     *     UserNames?: list<string>|null,
     *     MinimumEngineVersion?: string|null,
     *     PendingChanges?: ACLPendingChanges|null,
     *     Clusters?: list<string>|null,
     *     ARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
