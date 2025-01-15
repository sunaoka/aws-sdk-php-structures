<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperationV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KafkaBrokerNodeId
 * @property ProvisionedThroughput|null $ProvisionedThroughput
 * @property int|null $VolumeSizeGB
 */
class BrokerEBSVolumeInfo extends Shape
{
    /**
     * @param array{
     *     KafkaBrokerNodeId: string,
     *     ProvisionedThroughput?: ProvisionedThroughput|null,
     *     VolumeSizeGB?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
