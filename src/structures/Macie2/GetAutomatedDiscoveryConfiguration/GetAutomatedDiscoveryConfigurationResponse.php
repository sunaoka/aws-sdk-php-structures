<?php

namespace Sunaoka\Aws\Structures\Macie2\GetAutomatedDiscoveryConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ALL'|'NEW'|'NONE' $autoEnableOrganizationMembers
 * @property string $classificationScopeId
 * @property \Aws\Api\DateTimeResult $disabledAt
 * @property \Aws\Api\DateTimeResult $firstEnabledAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $sensitivityInspectionTemplateId
 * @property 'ENABLED'|'DISABLED' $status
 */
class GetAutomatedDiscoveryConfigurationResponse extends Response
{
}
