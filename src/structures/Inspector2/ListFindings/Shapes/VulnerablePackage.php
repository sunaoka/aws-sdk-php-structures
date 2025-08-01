<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $version
 * @property string|null $sourceLayerHash
 * @property int|null $epoch
 * @property string|null $release
 * @property string|null $arch
 * @property 'BUNDLER'|'CARGO'|'COMPOSER'|'NPM'|'NUGET'|'PIPENV'|'POETRY'|'YARN'|'GOBINARY'|'GOMOD'|'JAR'|'OS'|'PIP'|'PYTHONPKG'|'NODEPKG'|'POM'|'GEMSPEC'|'DOTNET_CORE'|null $packageManager
 * @property string|null $filePath
 * @property string|null $fixedInVersion
 * @property string|null $remediation
 * @property string|null $sourceLambdaLayerArn
 */
class VulnerablePackage extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     version: string,
     *     sourceLayerHash?: string|null,
     *     epoch?: int|null,
     *     release?: string|null,
     *     arch?: string|null,
     *     packageManager?: 'BUNDLER'|'CARGO'|'COMPOSER'|'NPM'|'NUGET'|'PIPENV'|'POETRY'|'YARN'|'GOBINARY'|'GOMOD'|'JAR'|'OS'|'PIP'|'PYTHONPKG'|'NODEPKG'|'POM'|'GEMSPEC'|'DOTNET_CORE'|null,
     *     filePath?: string|null,
     *     fixedInVersion?: string|null,
     *     remediation?: string|null,
     *     sourceLambdaLayerArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
