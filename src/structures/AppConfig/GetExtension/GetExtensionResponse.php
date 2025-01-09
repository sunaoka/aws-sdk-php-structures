<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetExtension;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Id
 * @property string $Name
 * @property int $VersionNumber
 * @property string $Arn
 * @property string $Description
 * @property array<'PRE_CREATE_HOSTED_CONFIGURATION_VERSION'|'PRE_START_DEPLOYMENT'|'AT_DEPLOYMENT_TICK'|'ON_DEPLOYMENT_START'|'ON_DEPLOYMENT_STEP'|'ON_DEPLOYMENT_BAKING'|'ON_DEPLOYMENT_COMPLETE'|'ON_DEPLOYMENT_ROLLED_BACK', list<Shapes\Action>> $Actions
 * @property array<string, Shapes\Parameter> $Parameters
 */
class GetExtensionResponse extends Response
{
}
