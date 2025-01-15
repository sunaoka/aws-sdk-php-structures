<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateGlobalTableSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexName
 * @property int<1, max>|null $ProvisionedWriteCapacityUnits
 * @property AutoScalingSettingsUpdate|null $ProvisionedWriteCapacityAutoScalingSettingsUpdate
 */
class GlobalTableGlobalSecondaryIndexSettingsUpdate extends Shape
{
    /**
     * @param array{
     *     IndexName: string,
     *     ProvisionedWriteCapacityUnits?: int<1, max>|null,
     *     ProvisionedWriteCapacityAutoScalingSettingsUpdate?: AutoScalingSettingsUpdate|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
