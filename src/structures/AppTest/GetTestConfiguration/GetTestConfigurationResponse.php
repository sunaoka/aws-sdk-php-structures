<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $testConfigurationId
 * @property string $name
 * @property string $testConfigurationArn
 * @property Shapes\TestConfigurationLatestVersion $latestVersion
 * @property int $testConfigurationVersion
 * @property 'Active'|'Deleting' $status
 * @property string $statusReason
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 * @property string $description
 * @property list<Shapes\Resource> $resources
 * @property array<string, string> $properties
 * @property array<string, string> $tags
 * @property Shapes\ServiceSettings $serviceSettings
 */
class GetTestConfigurationResponse extends Response
{
}
