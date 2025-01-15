<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CancelMetadataTransferJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $metadataTransferJobId
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $updateDateTime
 * @property Shapes\MetadataTransferJobStatus $status
 * @property Shapes\MetadataTransferJobProgress|null $progress
 */
class CancelMetadataTransferJobResponse extends Response
{
}
