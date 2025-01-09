<?php

namespace Sunaoka\Aws\Structures\AppFabric\GetIngestionDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $ingestionArn
 * @property ProcessingConfiguration $processingConfiguration
 * @property DestinationConfiguration $destinationConfiguration
 * @property 'Active'|'Failed' $status
 * @property string $statusReason
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class IngestionDestination extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     ingestionArn: string,
     *     processingConfiguration: ProcessingConfiguration,
     *     destinationConfiguration: DestinationConfiguration,
     *     status?: 'Active'|'Failed',
     *     statusReason?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
