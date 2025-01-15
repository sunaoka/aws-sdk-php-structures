<?php

namespace Sunaoka\Aws\Structures\Iot\UpdatePackageVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $packageName
 * @property string $versionName
 * @property string|null $description
 * @property array<string, string>|null $attributes
 * @property Shapes\PackageVersionArtifact|null $artifact
 * @property 'PUBLISH'|'DEPRECATE'|null $action
 * @property string|null $recipe
 * @property string|null $clientToken
 */
class UpdatePackageVersionRequest extends Request
{
    /**
     * @param array{
     *     packageName: string,
     *     versionName: string,
     *     description?: string|null,
     *     attributes?: array<string, string>|null,
     *     artifact?: Shapes\PackageVersionArtifact|null,
     *     action?: 'PUBLISH'|'DEPRECATE'|null,
     *     recipe?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
