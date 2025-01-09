<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateExtension;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExtensionIdentifier
 * @property string $Description
 * @property array<'PRE_CREATE_HOSTED_CONFIGURATION_VERSION'|'PRE_START_DEPLOYMENT'|'AT_DEPLOYMENT_TICK'|'ON_DEPLOYMENT_START'|'ON_DEPLOYMENT_STEP'|'ON_DEPLOYMENT_BAKING'|'ON_DEPLOYMENT_COMPLETE'|'ON_DEPLOYMENT_ROLLED_BACK', list<Shapes\Action>> $Actions
 * @property array<string, Shapes\Parameter> $Parameters
 * @property int $VersionNumber
 */
class UpdateExtensionRequest extends Request
{
    /**
     * @param array{
     *     ExtensionIdentifier: string,
     *     Description?: string,
     *     Actions?: array<'PRE_CREATE_HOSTED_CONFIGURATION_VERSION'|'PRE_START_DEPLOYMENT'|'AT_DEPLOYMENT_TICK'|'ON_DEPLOYMENT_START'|'ON_DEPLOYMENT_STEP'|'ON_DEPLOYMENT_BAKING'|'ON_DEPLOYMENT_COMPLETE'|'ON_DEPLOYMENT_ROLLED_BACK', list<Shapes\Action>>,
     *     Parameters?: array<string, Shapes\Parameter>,
     *     VersionNumber?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
