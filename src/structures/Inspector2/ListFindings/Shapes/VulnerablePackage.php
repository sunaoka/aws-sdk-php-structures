<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arch
 * @property int|null $epoch
 * @property string|null $filePath
 * @property string|null $fixedInVersion
 * @property string $name
 * @property 'BUNDLER'|'CARGO'|'COMPOSER'|'NPM'|'NUGET'|'PIPENV'|'POETRY'|'YARN'|'GOBINARY'|'GOMOD'|'JAR'|'OS'|'PIP'|'PYTHONPKG'|'NODEPKG'|'POM'|'GEMSPEC'|'DOTNET_CORE'|null $packageManager
 * @property string|null $release
 * @property string|null $remediation
 * @property string|null $sourceLambdaLayerArn
 * @property string|null $sourceLayerHash
 * @property string $version
 */
class VulnerablePackage extends Shape
{
    /**
     * @param array{
     *     arch?: string|null,
     *     epoch?: int|null,
     *     filePath?: string|null,
     *     fixedInVersion?: string|null,
     *     name: string,
     *     packageManager?: 'BUNDLER'|'CARGO'|'COMPOSER'|'NPM'|'NUGET'|'PIPENV'|'POETRY'|'YARN'|'GOBINARY'|'GOMOD'|'JAR'|'OS'|'PIP'|'PYTHONPKG'|'NODEPKG'|'POM'|'GEMSPEC'|'DOTNET_CORE'|null,
     *     release?: string|null,
     *     remediation?: string|null,
     *     sourceLambdaLayerArn?: string|null,
     *     sourceLayerHash?: string|null,
     *     version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
