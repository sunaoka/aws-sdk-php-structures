<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property 'nodejs'|'nodejs4.3'|'nodejs6.10'|'nodejs8.10'|'nodejs10.x'|'nodejs12.x'|'nodejs14.x'|'nodejs16.x'|'nodejs18.x'|'nodejs20.x'|'nodejs22.x'|'nodejs24.x'|'java8'|'java8.al2'|'java11'|'java17'|'java21'|'java25'|'python2.7'|'python3.6'|'python3.7'|'python3.8'|'python3.9'|'python3.10'|'python3.11'|'python3.12'|'python3.13'|'python3.14'|'dotnetcore1.0'|'dotnetcore2.0'|'dotnetcore2.1'|'dotnetcore3.1'|'dotnet6'|'dotnet8'|'dotnet10'|'nodejs4.3-edge'|'go1.x'|'ruby2.5'|'ruby2.7'|'ruby3.2'|'ruby3.3'|'ruby3.4'|'ruby4.0'|'provided'|'provided.al2'|'provided.al2023'|'java8.al2023'|'java11.al2023'|'java17.al2023'|null $Runtime
 * @property string $Role
 * @property string|null $Handler
 * @property Shapes\FunctionCode $Code
 * @property string|null $Description
 * @property int<1, 5400>|null $Timeout
 * @property int<128, 32768>|null $MemorySize
 * @property bool|null $Publish
 * @property 'LATEST_PUBLISHED'|null $PublishTo
 * @property Shapes\VpcConfig|null $VpcConfig
 * @property 'Zip'|'Image'|null $PackageType
 * @property Shapes\DeadLetterConfig|null $DeadLetterConfig
 * @property Shapes\Environment|null $Environment
 * @property string|null $KMSKeyArn
 * @property Shapes\TracingConfig|null $TracingConfig
 * @property array<string, string>|null $Tags
 * @property list<string>|null $Layers
 * @property list<Shapes\FileSystemConfig>|null $FileSystemConfigs
 * @property string|null $CodeSigningConfigArn
 * @property Shapes\ImageConfig|null $ImageConfig
 * @property list<'x86_64'|'arm64'>|null $Architectures
 * @property Shapes\EphemeralStorage|null $EphemeralStorage
 * @property Shapes\SnapStart|null $SnapStart
 * @property Shapes\LoggingConfig|null $LoggingConfig
 * @property Shapes\TenancyConfig|null $TenancyConfig
 * @property Shapes\CapacityProviderConfig|null $CapacityProviderConfig
 * @property Shapes\DurableConfig|null $DurableConfig
 */
class CreateFunctionRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Runtime?: 'nodejs'|'nodejs4.3'|'nodejs6.10'|'nodejs8.10'|'nodejs10.x'|'nodejs12.x'|'nodejs14.x'|'nodejs16.x'|'nodejs18.x'|'nodejs20.x'|'nodejs22.x'|'nodejs24.x'|'java8'|'java8.al2'|'java11'|'java17'|'java21'|'java25'|'python2.7'|'python3.6'|'python3.7'|'python3.8'|'python3.9'|'python3.10'|'python3.11'|'python3.12'|'python3.13'|'python3.14'|'dotnetcore1.0'|'dotnetcore2.0'|'dotnetcore2.1'|'dotnetcore3.1'|'dotnet6'|'dotnet8'|'dotnet10'|'nodejs4.3-edge'|'go1.x'|'ruby2.5'|'ruby2.7'|'ruby3.2'|'ruby3.3'|'ruby3.4'|'ruby4.0'|'provided'|'provided.al2'|'provided.al2023'|'java8.al2023'|'java11.al2023'|'java17.al2023'|null,
     *     Role: string,
     *     Handler?: string|null,
     *     Code: Shapes\FunctionCode,
     *     Description?: string|null,
     *     Timeout?: int<1, 5400>|null,
     *     MemorySize?: int<128, 32768>|null,
     *     Publish?: bool|null,
     *     PublishTo?: 'LATEST_PUBLISHED'|null,
     *     VpcConfig?: Shapes\VpcConfig|null,
     *     PackageType?: 'Zip'|'Image'|null,
     *     DeadLetterConfig?: Shapes\DeadLetterConfig|null,
     *     Environment?: Shapes\Environment|null,
     *     KMSKeyArn?: string|null,
     *     TracingConfig?: Shapes\TracingConfig|null,
     *     Tags?: array<string, string>|null,
     *     Layers?: list<string>|null,
     *     FileSystemConfigs?: list<Shapes\FileSystemConfig>|null,
     *     CodeSigningConfigArn?: string|null,
     *     ImageConfig?: Shapes\ImageConfig|null,
     *     Architectures?: list<'x86_64'|'arm64'>|null,
     *     EphemeralStorage?: Shapes\EphemeralStorage|null,
     *     SnapStart?: Shapes\SnapStart|null,
     *     LoggingConfig?: Shapes\LoggingConfig|null,
     *     TenancyConfig?: Shapes\TenancyConfig|null,
     *     CapacityProviderConfig?: Shapes\CapacityProviderConfig|null,
     *     DurableConfig?: Shapes\DurableConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
