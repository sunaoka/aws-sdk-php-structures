<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelImportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobArn
 * @property string $jobName
 * @property string $importedModelName
 * @property string $importedModelArn
 * @property string $roleArn
 * @property Shapes\ModelDataSource $modelDataSource
 * @property 'InProgress'|'Completed'|'Failed' $status
 * @property string $failureMessage
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property Shapes\VpcConfig $vpcConfig
 * @property string $importedModelKmsKeyArn
 */
class GetModelImportJobResponse extends Response
{
}
