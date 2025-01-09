<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\ExportEarthObservationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $ExecutionRoleArn
 * @property bool $ExportSourceImages
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $ExportStatus
 * @property Shapes\OutputConfigInput $OutputConfig
 */
class ExportEarthObservationJobResponse extends Response
{
}
