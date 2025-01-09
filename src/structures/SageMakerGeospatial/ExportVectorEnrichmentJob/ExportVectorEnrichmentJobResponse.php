<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\ExportVectorEnrichmentJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $ExecutionRoleArn
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $ExportStatus
 * @property Shapes\ExportVectorEnrichmentJobOutputConfig $OutputConfig
 */
class ExportVectorEnrichmentJobResponse extends Response
{
}
