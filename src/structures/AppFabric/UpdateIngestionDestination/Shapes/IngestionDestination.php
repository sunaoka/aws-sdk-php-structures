<?php

namespace Sunaoka\Aws\Structures\AppFabric\UpdateIngestionDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $ingestionArn
 * @property ProcessingConfiguration $processingConfiguration
 * @property DestinationConfiguration $destinationConfiguration
 * @property 'Active'|'Failed'|null $status
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class IngestionDestination extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     ingestionArn: string,
     *     processingConfiguration: ProcessingConfiguration,
     *     destinationConfiguration: DestinationConfiguration,
     *     status?: 'Active'|'Failed'|null,
     *     statusReason?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
