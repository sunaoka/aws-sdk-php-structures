<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\GetConfigurationManager;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ConfigurationDefinition>|null $ConfigurationDefinitions
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $LastModifiedAt
 * @property string $ManagerArn
 * @property string|null $Name
 * @property list<Shapes\StatusSummary>|null $StatusSummaries
 * @property array<string, string>|null $Tags
 */
class GetConfigurationManagerResponse extends Response
{
}
