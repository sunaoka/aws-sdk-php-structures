<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProvisionState
 * @property int $ProvisionedCapacityUnits
 * @property \Aws\Api\DateTimeResult $DateProvisioned
 * @property bool $IsNewProvisioningAvailable
 * @property \Aws\Api\DateTimeResult $DateNewProvisioningDataAvailable
 * @property string $ReasonForNewProvisioningData
 */
class ProvisionData extends Shape
{
    /**
     * @param array{
     *     ProvisionState?: string,
     *     ProvisionedCapacityUnits?: int,
     *     DateProvisioned?: \Aws\Api\DateTimeResult,
     *     IsNewProvisioningAvailable?: bool,
     *     DateNewProvisioningDataAvailable?: \Aws\Api\DateTimeResult,
     *     ReasonForNewProvisioningData?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
