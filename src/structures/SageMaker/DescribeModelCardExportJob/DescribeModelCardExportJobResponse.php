<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelCardExportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ModelCardExportJobName
 * @property string $ModelCardExportJobArn
 * @property 'InProgress'|'Completed'|'Failed' $Status
 * @property string $ModelCardName
 * @property int $ModelCardVersion
 * @property Shapes\ModelCardExportOutputConfig $OutputConfig
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastModifiedAt
 * @property string $FailureReason
 * @property Shapes\ModelCardExportArtifacts $ExportArtifacts
 */
class DescribeModelCardExportJobResponse extends Response
{
}
