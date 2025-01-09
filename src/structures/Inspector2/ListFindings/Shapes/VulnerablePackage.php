<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arch
 * @property int $epoch
 * @property string $filePath
 * @property string $fixedInVersion
 * @property string $name
 * @property 'BUNDLER'|'CARGO'|'COMPOSER'|'NPM'|'NUGET'|'PIPENV'|'POETRY'|'YARN'|'GOBINARY'|'GOMOD'|'JAR'|'OS'|'PIP'|'PYTHONPKG'|'NODEPKG'|'POM'|'GEMSPEC'|'DOTNET_CORE' $packageManager
 * @property string $release
 * @property string $remediation
 * @property string $sourceLambdaLayerArn
 * @property string $sourceLayerHash
 * @property string $version
 */
class VulnerablePackage extends Shape
{
    /**
     * @param array{
     *     arch?: string,
     *     epoch?: int,
     *     filePath?: string,
     *     fixedInVersion?: string,
     *     name: string,
     *     packageManager?: 'BUNDLER'|'CARGO'|'COMPOSER'|'NPM'|'NUGET'|'PIPENV'|'POETRY'|'YARN'|'GOBINARY'|'GOMOD'|'JAR'|'OS'|'PIP'|'PYTHONPKG'|'NODEPKG'|'POM'|'GEMSPEC'|'DOTNET_CORE',
     *     release?: string,
     *     remediation?: string,
     *     sourceLambdaLayerArn?: string,
     *     sourceLayerHash?: string,
     *     version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
