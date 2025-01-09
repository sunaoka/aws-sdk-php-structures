<?php

namespace Sunaoka\Aws\Structures\Lambda\ListLayers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LayerVersionArn
 * @property int $Version
 * @property string $Description
 * @property string $CreatedDate
 * @property list<'nodejs'|'nodejs4.3'|'nodejs6.10'|'nodejs8.10'|'nodejs10.x'|'nodejs12.x'|'nodejs14.x'|'nodejs16.x'|'java8'|'java8.al2'|'java11'|'python2.7'|'python3.6'|'python3.7'|'python3.8'|'python3.9'|'dotnetcore1.0'|'dotnetcore2.0'|'dotnetcore2.1'|'dotnetcore3.1'|'dotnet6'|'dotnet8'|'nodejs4.3-edge'|'go1.x'|'ruby2.5'|'ruby2.7'|'provided'|'provided.al2'|'nodejs18.x'|'python3.10'|'java17'|'ruby3.2'|'ruby3.3'|'python3.11'|'nodejs20.x'|'provided.al2023'|'python3.12'|'java21'|'python3.13'|'nodejs22.x'> $CompatibleRuntimes
 * @property string $LicenseInfo
 * @property list<'x86_64'|'arm64'> $CompatibleArchitectures
 */
class LayerVersionsListItem extends Shape
{
    /**
     * @param array{
     *     LayerVersionArn?: string,
     *     Version?: int,
     *     Description?: string,
     *     CreatedDate?: string,
     *     CompatibleRuntimes?: list<'nodejs'|'nodejs4.3'|'nodejs6.10'|'nodejs8.10'|'nodejs10.x'|'nodejs12.x'|'nodejs14.x'|'nodejs16.x'|'java8'|'java8.al2'|'java11'|'python2.7'|'python3.6'|'python3.7'|'python3.8'|'python3.9'|'dotnetcore1.0'|'dotnetcore2.0'|'dotnetcore2.1'|'dotnetcore3.1'|'dotnet6'|'dotnet8'|'nodejs4.3-edge'|'go1.x'|'ruby2.5'|'ruby2.7'|'provided'|'provided.al2'|'nodejs18.x'|'python3.10'|'java17'|'ruby3.2'|'ruby3.3'|'python3.11'|'nodejs20.x'|'provided.al2023'|'python3.12'|'java21'|'python3.13'|'nodejs22.x'>,
     *     LicenseInfo?: string,
     *     CompatibleArchitectures?: list<'x86_64'|'arm64'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
