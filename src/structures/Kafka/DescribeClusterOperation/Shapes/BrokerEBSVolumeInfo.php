<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KafkaBrokerNodeId
 * @property ProvisionedThroughput $ProvisionedThroughput
 * @property int $VolumeSizeGB
 */
class BrokerEBSVolumeInfo extends Shape
{
    /**
     * @param array{
     *     KafkaBrokerNodeId: string,
     *     ProvisionedThroughput?: ProvisionedThroughput,
     *     VolumeSizeGB?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
