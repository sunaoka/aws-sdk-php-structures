<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListMetadataTransferJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $metadataTransferJobId
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $updateDateTime
 * @property MetadataTransferJobStatus $status
 * @property MetadataTransferJobProgress|null $progress
 */
class MetadataTransferJobSummary extends Shape
{
    /**
     * @param array{
     *     metadataTransferJobId: string,
     *     arn: string,
     *     creationDateTime: \Aws\Api\DateTimeResult,
     *     updateDateTime: \Aws\Api\DateTimeResult,
     *     status: MetadataTransferJobStatus,
     *     progress?: MetadataTransferJobProgress|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
