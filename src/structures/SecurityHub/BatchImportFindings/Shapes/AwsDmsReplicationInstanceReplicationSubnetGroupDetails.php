<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReplicationSubnetGroupIdentifier
 */
class AwsDmsReplicationInstanceReplicationSubnetGroupDetails extends Shape
{
    /**
     * @param array{ReplicationSubnetGroupIdentifier?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
