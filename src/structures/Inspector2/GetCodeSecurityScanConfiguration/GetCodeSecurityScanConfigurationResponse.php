<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCodeSecurityScanConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $scanConfigurationArn
 * @property string|null $name
 * @property Shapes\CodeSecurityScanConfiguration|null $configuration
 * @property 'ORGANIZATION'|'ACCOUNT'|null $level
 * @property Shapes\ScopeSettings|null $scopeSettings
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property array<string, string>|null $tags
 */
class GetCodeSecurityScanConfigurationResponse extends Response
{
}
