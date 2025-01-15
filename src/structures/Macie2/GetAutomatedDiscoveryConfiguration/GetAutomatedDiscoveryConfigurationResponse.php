<?php

namespace Sunaoka\Aws\Structures\Macie2\GetAutomatedDiscoveryConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ALL'|'NEW'|'NONE'|null $autoEnableOrganizationMembers
 * @property string|null $classificationScopeId
 * @property \Aws\Api\DateTimeResult|null $disabledAt
 * @property \Aws\Api\DateTimeResult|null $firstEnabledAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $sensitivityInspectionTemplateId
 * @property 'ENABLED'|'DISABLED'|null $status
 */
class GetAutomatedDiscoveryConfigurationResponse extends Response
{
}
