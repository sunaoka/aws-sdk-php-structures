<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelImportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $jobArn
 * @property string|null $jobName
 * @property string|null $importedModelName
 * @property string|null $importedModelArn
 * @property string|null $roleArn
 * @property Shapes\ModelDataSource|null $modelDataSource
 * @property 'InProgress'|'Completed'|'Failed'|null $status
 * @property string|null $failureMessage
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property Shapes\VpcConfig|null $vpcConfig
 * @property string|null $importedModelKmsKeyArn
 */
class GetModelImportJobResponse extends Response
{
}
