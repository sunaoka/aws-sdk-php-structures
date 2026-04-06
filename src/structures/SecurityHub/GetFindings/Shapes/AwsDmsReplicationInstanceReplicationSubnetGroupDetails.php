<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReplicationSubnetGroupIdentifier
 */
class AwsDmsReplicationInstanceReplicationSubnetGroupDetails extends Shape
{
    /**
     * @param array{ReplicationSubnetGroupIdentifier?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
