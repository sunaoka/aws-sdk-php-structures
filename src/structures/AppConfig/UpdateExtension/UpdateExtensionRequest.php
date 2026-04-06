<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateExtension;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExtensionIdentifier
 * @property string|null $Description
 * @property array<'PRE_CREATE_HOSTED_CONFIGURATION_VERSION'|'PRE_START_DEPLOYMENT'|'AT_DEPLOYMENT_TICK'|'ON_DEPLOYMENT_START'|'ON_DEPLOYMENT_STEP'|'ON_DEPLOYMENT_BAKING'|'ON_DEPLOYMENT_COMPLETE'|'ON_DEPLOYMENT_ROLLED_BACK', list<Shapes\Action>>|null $Actions
 * @property array<string, Shapes\Parameter>|null $Parameters
 * @property int|null $VersionNumber
 */
class UpdateExtensionRequest extends Request
{
    /**
     * @param array{
     *     ExtensionIdentifier: string,
     *     Description?: string|null,
     *     Actions?: array<'PRE_CREATE_HOSTED_CONFIGURATION_VERSION'|'PRE_START_DEPLOYMENT'|'AT_DEPLOYMENT_TICK'|'ON_DEPLOYMENT_START'|'ON_DEPLOYMENT_STEP'|'ON_DEPLOYMENT_BAKING'|'ON_DEPLOYMENT_COMPLETE'|'ON_DEPLOYMENT_ROLLED_BACK', list<Shapes\Action>>|null,
     *     Parameters?: array<string, Shapes\Parameter>|null,
     *     VersionNumber?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
