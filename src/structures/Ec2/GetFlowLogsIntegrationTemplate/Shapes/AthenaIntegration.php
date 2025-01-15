<?php

namespace Sunaoka\Aws\Structures\Ec2\GetFlowLogsIntegrationTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IntegrationResultS3DestinationArn
 * @property 'none'|'daily'|'weekly'|'monthly' $PartitionLoadFrequency
 * @property \Aws\Api\DateTimeResult|null $PartitionStartDate
 * @property \Aws\Api\DateTimeResult|null $PartitionEndDate
 */
class AthenaIntegration extends Shape
{
    /**
     * @param array{
     *     IntegrationResultS3DestinationArn: string,
     *     PartitionLoadFrequency: 'none'|'daily'|'weekly'|'monthly',
     *     PartitionStartDate?: \Aws\Api\DateTimeResult|null,
     *     PartitionEndDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
