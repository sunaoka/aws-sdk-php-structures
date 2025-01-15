<?php

namespace Sunaoka\Aws\Structures\AppConfig\CreateExtension;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property int|null $VersionNumber
 * @property string|null $Arn
 * @property string|null $Description
 * @property array<'PRE_CREATE_HOSTED_CONFIGURATION_VERSION'|'PRE_START_DEPLOYMENT'|'AT_DEPLOYMENT_TICK'|'ON_DEPLOYMENT_START'|'ON_DEPLOYMENT_STEP'|'ON_DEPLOYMENT_BAKING'|'ON_DEPLOYMENT_COMPLETE'|'ON_DEPLOYMENT_ROLLED_BACK', list<Shapes\Action>>|null $Actions
 * @property array<string, Shapes\Parameter>|null $Parameters
 */
class CreateExtensionResponse extends Response
{
}
