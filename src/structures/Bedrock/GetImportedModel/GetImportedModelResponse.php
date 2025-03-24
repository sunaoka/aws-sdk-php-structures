<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetImportedModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $modelArn
 * @property string|null $modelName
 * @property string|null $jobName
 * @property string|null $jobArn
 * @property Shapes\ModelDataSource|null $modelDataSource
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property string|null $modelArchitecture
 * @property string|null $modelKmsKeyArn
 * @property bool|null $instructSupported
 * @property Shapes\CustomModelUnits|null $customModelUnits
 */
class GetImportedModelResponse extends Response
{
}
