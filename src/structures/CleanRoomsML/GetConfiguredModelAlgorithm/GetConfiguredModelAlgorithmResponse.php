<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetConfiguredModelAlgorithm;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $configuredModelAlgorithmArn
 * @property string $name
 * @property Shapes\ContainerConfig|null $trainingContainerConfig
 * @property Shapes\InferenceContainerConfig|null $inferenceContainerConfig
 * @property string $roleArn
 * @property string|null $description
 * @property array<string, string>|null $tags
 * @property string|null $kmsKeyArn
 */
class GetConfiguredModelAlgorithmResponse extends Response
{
}
