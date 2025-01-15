<?php

namespace Sunaoka\Aws\Structures\Iot\CreatePackageVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $packageName
 * @property string $versionName
 * @property string|null $description
 * @property array<string, string>|null $attributes
 * @property Shapes\PackageVersionArtifact|null $artifact
 * @property string|null $recipe
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreatePackageVersionRequest extends Request
{
    /**
     * @param array{
     *     packageName: string,
     *     versionName: string,
     *     description?: string|null,
     *     attributes?: array<string, string>|null,
     *     artifact?: Shapes\PackageVersionArtifact|null,
     *     recipe?: string|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
