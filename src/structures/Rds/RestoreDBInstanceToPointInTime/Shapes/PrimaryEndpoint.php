<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBInstanceToPointInTime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Address
 * @property string|null $HostedZoneId
 */
class PrimaryEndpoint extends Shape
{
    /**
     * @param array{
     *     Address?: string|null,
     *     HostedZoneId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
