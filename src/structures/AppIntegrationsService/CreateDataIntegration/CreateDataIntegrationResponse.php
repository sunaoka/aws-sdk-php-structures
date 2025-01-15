<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\CreateDataIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $KmsKey
 * @property string|null $SourceURI
 * @property Shapes\ScheduleConfiguration|null $ScheduleConfiguration
 * @property array<string, string>|null $Tags
 * @property string|null $ClientToken
 * @property Shapes\FileConfiguration|null $FileConfiguration
 * @property array<string, array<string, list<string>>>|null $ObjectConfiguration
 */
class CreateDataIntegrationResponse extends Response
{
}
