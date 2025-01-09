<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBInstanceReadReplica\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Address
 * @property int $Port
 * @property string $HostedZoneId
 */
class Endpoint extends Shape
{
    /**
     * @param array{
     *     Address?: string,
     *     Port?: int,
     *     HostedZoneId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
