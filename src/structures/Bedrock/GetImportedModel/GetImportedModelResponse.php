<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetImportedModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $modelArn
 * @property string $modelName
 * @property string $jobName
 * @property string $jobArn
 * @property Shapes\ModelDataSource $modelDataSource
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $modelArchitecture
 * @property string $modelKmsKeyArn
 * @property bool $instructSupported
 */
class GetImportedModelResponse extends Response
{
}
