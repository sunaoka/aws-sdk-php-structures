<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProvisionState
 * @property int|null $ProvisionedCapacityUnits
 * @property \Aws\Api\DateTimeResult|null $DateProvisioned
 * @property bool|null $IsNewProvisioningAvailable
 * @property \Aws\Api\DateTimeResult|null $DateNewProvisioningDataAvailable
 * @property string|null $ReasonForNewProvisioningData
 */
class ProvisionData extends Shape
{
    /**
     * @param array{
     *     ProvisionState?: string|null,
     *     ProvisionedCapacityUnits?: int|null,
     *     DateProvisioned?: \Aws\Api\DateTimeResult|null,
     *     IsNewProvisioningAvailable?: bool|null,
     *     DateNewProvisioningDataAvailable?: \Aws\Api\DateTimeResult|null,
     *     ReasonForNewProvisioningData?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
