<?php

namespace Sunaoka\Aws\Structures\Iot\UpdatePackageVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $packageName
 * @property string $versionName
 * @property string $description
 * @property array<string, string> $attributes
 * @property Shapes\PackageVersionArtifact $artifact
 * @property 'PUBLISH'|'DEPRECATE' $action
 * @property string $recipe
 * @property string $clientToken
 */
class UpdatePackageVersionRequest extends Request
{
    /**
     * @param array{
     *     packageName: string,
     *     versionName: string,
     *     description?: string,
     *     attributes?: array<string, string>,
     *     artifact?: Shapes\PackageVersionArtifact,
     *     action?: 'PUBLISH'|'DEPRECATE',
     *     recipe?: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
