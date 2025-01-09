<?php

namespace Sunaoka\Aws\Structures\Iot\CreatePackageVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $packageName
 * @property string $versionName
 * @property string $description
 * @property array<string, string> $attributes
 * @property Shapes\PackageVersionArtifact $artifact
 * @property string $recipe
 * @property array<string, string> $tags
 * @property string $clientToken
 */
class CreatePackageVersionRequest extends Request
{
    /**
     * @param array{
     *     packageName: string,
     *     versionName: string,
     *     description?: string,
     *     attributes?: array<string, string>,
     *     artifact?: Shapes\PackageVersionArtifact,
     *     recipe?: string,
     *     tags?: array<string, string>,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
