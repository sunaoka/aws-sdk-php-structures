<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\GetConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Account
 * @property string|null $ConfigurationDefinitionId
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $Id
 * @property \Aws\Api\DateTimeResult|null $LastModifiedAt
 * @property string|null $ManagerArn
 * @property array<string, string>|null $Parameters
 * @property string|null $Region
 * @property list<Shapes\StatusSummary>|null $StatusSummaries
 * @property string|null $Type
 * @property string|null $TypeVersion
 */
class GetConfigurationResponse extends Response
{
}
