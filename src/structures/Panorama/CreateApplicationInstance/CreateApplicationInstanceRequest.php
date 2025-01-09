<?php

namespace Sunaoka\Aws\Structures\Panorama\CreateApplicationInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationInstanceIdToReplace
 * @property string $DefaultRuntimeContextDevice
 * @property string $Description
 * @property Shapes\ManifestOverridesPayload $ManifestOverridesPayload
 * @property Shapes\ManifestPayload $ManifestPayload
 * @property string $Name
 * @property string $RuntimeRoleArn
 * @property array<string, string> $Tags
 */
class CreateApplicationInstanceRequest extends Request
{
    /**
     * @param array{
     *     ApplicationInstanceIdToReplace?: string,
     *     DefaultRuntimeContextDevice: string,
     *     Description?: string,
     *     ManifestOverridesPayload?: Shapes\ManifestOverridesPayload,
     *     ManifestPayload: Shapes\ManifestPayload,
     *     Name?: string,
     *     RuntimeRoleArn?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
