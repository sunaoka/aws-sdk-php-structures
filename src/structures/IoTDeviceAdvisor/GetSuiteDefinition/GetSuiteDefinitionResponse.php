<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\GetSuiteDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $suiteDefinitionId
 * @property string $suiteDefinitionArn
 * @property string $suiteDefinitionVersion
 * @property string $latestVersion
 * @property Shapes\SuiteDefinitionConfiguration $suiteDefinitionConfiguration
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastModifiedAt
 * @property array<string, string> $tags
 */
class GetSuiteDefinitionResponse extends Response
{
}
