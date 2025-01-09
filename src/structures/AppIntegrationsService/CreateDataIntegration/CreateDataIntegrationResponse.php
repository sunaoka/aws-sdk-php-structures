<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\CreateDataIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property string $KmsKey
 * @property string $SourceURI
 * @property Shapes\ScheduleConfiguration $ScheduleConfiguration
 * @property array<string, string> $Tags
 * @property string $ClientToken
 * @property Shapes\FileConfiguration $FileConfiguration
 * @property array<string, array<string, list<string>>> $ObjectConfiguration
 */
class CreateDataIntegrationResponse extends Response
{
}
