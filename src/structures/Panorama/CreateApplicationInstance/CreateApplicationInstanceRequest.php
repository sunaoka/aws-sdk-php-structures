<?php

namespace Sunaoka\Aws\Structures\Panorama\CreateApplicationInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ApplicationInstanceIdToReplace
 * @property string $DefaultRuntimeContextDevice
 * @property string|null $Description
 * @property Shapes\ManifestOverridesPayload|null $ManifestOverridesPayload
 * @property Shapes\ManifestPayload $ManifestPayload
 * @property string|null $Name
 * @property string|null $RuntimeRoleArn
 * @property array<string, string>|null $Tags
 */
class CreateApplicationInstanceRequest extends Request
{
    /**
     * @param array{
     *     ApplicationInstanceIdToReplace?: string|null,
     *     DefaultRuntimeContextDevice: string,
     *     Description?: string|null,
     *     ManifestOverridesPayload?: Shapes\ManifestOverridesPayload|null,
     *     ManifestPayload: Shapes\ManifestPayload,
     *     Name?: string|null,
     *     RuntimeRoleArn?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
