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
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 * @property string|null $description
 * @property list<Shapes\Resource> $resources
 * @property array<string, string> $properties
 * @property array<string, string>|null $tags
 * @property Shapes\ServiceSettings|null $serviceSettings
 */
class GetTestConfigurationResponse extends Response
{
}
