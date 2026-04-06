<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetMetadataTransferJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $metadataTransferJobId
 * @property string $arn
 * @property string|null $description
 * @property list<Shapes\SourceConfiguration> $sources
 * @property Shapes\DestinationConfiguration $destination
 * @property string $metadataTransferJobRole
 * @property string|null $reportUrl
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $updateDateTime
 * @property Shapes\MetadataTransferJobStatus $status
 * @property Shapes\MetadataTransferJobProgress|null $progress
 */
class GetMetadataTransferJobResponse extends Response
{
}
