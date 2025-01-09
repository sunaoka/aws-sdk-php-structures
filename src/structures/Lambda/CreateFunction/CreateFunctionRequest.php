<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property 'nodejs'|'nodejs4.3'|'nodejs6.10'|'nodejs8.10'|'nodejs10.x'|'nodejs12.x'|'nodejs14.x'|'nodejs16.x'|'java8'|'java8.al2'|'java11'|'python2.7'|'python3.6'|'python3.7'|'python3.8'|'python3.9'|'dotnetcore1.0'|'dotnetcore2.0'|'dotnetcore2.1'|'dotnetcore3.1'|'dotnet6'|'dotnet8'|'nodejs4.3-edge'|'go1.x'|'ruby2.5'|'ruby2.7'|'provided'|'provided.al2'|'nodejs18.x'|'python3.10'|'java17'|'ruby3.2'|'ruby3.3'|'python3.11'|'nodejs20.x'|'provided.al2023'|'python3.12'|'java21'|'python3.13'|'nodejs22.x' $Runtime
 * @property string $Role
 * @property string $Handler
 * @property Shapes\FunctionCode $Code
 * @property string $Description
 * @property int $Timeout
 * @property int $MemorySize
 * @property bool $Publish
 * @property Shapes\VpcConfig $VpcConfig
 * @property 'Zip'|'Image' $PackageType
 * @property Shapes\DeadLetterConfig $DeadLetterConfig
 * @property Shapes\Environment $Environment
 * @property string $KMSKeyArn
 * @property Shapes\TracingConfig $TracingConfig
 * @property array<string, string> $Tags
 * @property list<string> $Layers
 * @property list<Shapes\FileSystemConfig> $FileSystemConfigs
 * @property Shapes\ImageConfig $ImageConfig
 * @property string $CodeSigningConfigArn
 * @property list<'x86_64'|'arm64'> $Architectures
 * @property Shapes\EphemeralStorage $EphemeralStorage
 * @property Shapes\SnapStart $SnapStart
 * @property Shapes\LoggingConfig $LoggingConfig
 */
class CreateFunctionRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Runtime?: 'nodejs'|'nodejs4.3'|'nodejs6.10'|'nodejs8.10'|'nodejs10.x'|'nodejs12.x'|'nodejs14.x'|'nodejs16.x'|'java8'|'java8.al2'|'java11'|'python2.7'|'python3.6'|'python3.7'|'python3.8'|'python3.9'|'dotnetcore1.0'|'dotnetcore2.0'|'dotnetcore2.1'|'dotnetcore3.1'|'dotnet6'|'dotnet8'|'nodejs4.3-edge'|'go1.x'|'ruby2.5'|'ruby2.7'|'provided'|'provided.al2'|'nodejs18.x'|'python3.10'|'java17'|'ruby3.2'|'ruby3.3'|'python3.11'|'nodejs20.x'|'provided.al2023'|'python3.12'|'java21'|'python3.13'|'nodejs22.x',
     *     Role: string,
     *     Handler?: string,
     *     Code: Shapes\FunctionCode,
     *     Description?: string,
     *     Timeout?: int,
     *     MemorySize?: int,
     *     Publish?: bool,
     *     VpcConfig?: Shapes\VpcConfig,
     *     PackageType?: 'Zip'|'Image',
     *     DeadLetterConfig?: Shapes\DeadLetterConfig,
     *     Environment?: Shapes\Environment,
     *     KMSKeyArn?: string,
     *     TracingConfig?: Shapes\TracingConfig,
     *     Tags?: array<string, string>,
     *     Layers?: list<string>,
     *     FileSystemConfigs?: list<Shapes\FileSystemConfig>,
     *     ImageConfig?: Shapes\ImageConfig,
     *     CodeSigningConfigArn?: string,
     *     Architectures?: list<'x86_64'|'arm64'>,
     *     EphemeralStorage?: Shapes\EphemeralStorage,
     *     SnapStart?: Shapes\SnapStart,
     *     LoggingConfig?: Shapes\LoggingConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
