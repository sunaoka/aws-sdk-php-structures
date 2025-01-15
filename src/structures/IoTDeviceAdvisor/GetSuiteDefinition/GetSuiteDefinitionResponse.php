<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\GetSuiteDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $suiteDefinitionId
 * @property string|null $suiteDefinitionArn
 * @property string|null $suiteDefinitionVersion
 * @property string|null $latestVersion
 * @property Shapes\SuiteDefinitionConfiguration|null $suiteDefinitionConfiguration
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastModifiedAt
 * @property array<string, string>|null $tags
 */
class GetSuiteDefinitionResponse extends Response
{
}
