<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\GetDataIntegration;

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
 * @property Shapes\FileConfiguration $FileConfiguration
 * @property array<string, array<string, list<string>>> $ObjectConfiguration
 */
class GetDataIntegrationResponse extends Response
{
}
