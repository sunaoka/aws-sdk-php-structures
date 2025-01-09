<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\GetConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Account
 * @property string $ConfigurationDefinitionId
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $LastModifiedAt
 * @property string $ManagerArn
 * @property array<string, string> $Parameters
 * @property string $Region
 * @property list<Shapes\StatusSummary> $StatusSummaries
 * @property string $Type
 * @property string $TypeVersion
 */
class GetConfigurationResponse extends Response
{
}
