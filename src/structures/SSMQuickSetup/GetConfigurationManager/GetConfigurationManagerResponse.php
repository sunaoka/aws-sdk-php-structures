<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\GetConfigurationManager;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ConfigurationDefinition> $ConfigurationDefinitions
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $LastModifiedAt
 * @property string $ManagerArn
 * @property string $Name
 * @property list<Shapes\StatusSummary> $StatusSummaries
 * @property array<string, string> $Tags
 */
class GetConfigurationManagerResponse extends Response
{
}
