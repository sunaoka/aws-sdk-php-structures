<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetConfiguredModelAlgorithm;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $configuredModelAlgorithmArn
 * @property string $name
 * @property Shapes\ContainerConfig $trainingContainerConfig
 * @property Shapes\InferenceContainerConfig $inferenceContainerConfig
 * @property string $roleArn
 * @property string $description
 * @property array<string, string> $tags
 * @property string $kmsKeyArn
 */
class GetConfiguredModelAlgorithmResponse extends Response
{
}
