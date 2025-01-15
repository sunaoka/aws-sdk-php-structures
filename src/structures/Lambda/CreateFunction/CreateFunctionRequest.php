<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property 'nodejs'|'nodejs4.3'|'nodejs6.10'|'nodejs8.10'|'nodejs10.x'|'nodejs12.x'|'nodejs14.x'|'nodejs16.x'|'java8'|'java8.al2'|'java11'|'python2.7'|'python3.6'|'python3.7'|'python3.8'|'python3.9'|'dotnetcore1.0'|'dotnetcore2.0'|'dotnetcore2.1'|'dotnetcore3.1'|'dotnet6'|'dotnet8'|'nodejs4.3-edge'|'go1.x'|'ruby2.5'|'ruby2.7'|'provided'|'provided.al2'|'nodejs18.x'|'python3.10'|'java17'|'ruby3.2'|'ruby3.3'|'python3.11'|'nodejs20.x'|'provided.al2023'|'python3.12'|'java21'|'python3.13'|'nodejs22.x'|null $Runtime
 * @property string $Role
 * @property string|null $Handler
 * @property Shapes\FunctionCode $Code
 * @property string|null $Description
 * @property int<1, max>|null $Timeout
 * @property int<128, 10240>|null $MemorySize
 * @property bool|null $Publish
 * @property Shapes\VpcConfig|null $VpcConfig
 * @property 'Zip'|'Image'|null $PackageType
 * @property Shapes\DeadLetterConfig|null $DeadLetterConfig
 * @property Shapes\Environment|null $Environment
 * @property string|null $KMSKeyArn
 * @property Shapes\TracingConfig|null $TracingConfig
 * @property array<string, string>|null $Tags
 * @property list<string>|null $Layers
 * @property list<Shapes\FileSystemConfig>|null $FileSystemConfigs
 * @property Shapes\ImageConfig|null $ImageConfig
 * @property string|null $CodeSigningConfigArn
 * @property list<'x86_64'|'arm64'>|null $Architectures
 * @property Shapes\EphemeralStorage|null $EphemeralStorage
 * @property Shapes\SnapStart|null $SnapStart
 * @property Shapes\LoggingConfig|null $LoggingConfig
 */
class CreateFunctionRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Runtime?: 'nodejs'|'nodejs4.3'|'nodejs6.10'|'nodejs8.10'|'nodejs10.x'|'nodejs12.x'|'nodejs14.x'|'nodejs16.x'|'java8'|'java8.al2'|'java11'|'python2.7'|'python3.6'|'python3.7'|'python3.8'|'python3.9'|'dotnetcore1.0'|'dotnetcore2.0'|'dotnetcore2.1'|'dotnetcore3.1'|'dotnet6'|'dotnet8'|'nodejs4.3-edge'|'go1.x'|'ruby2.5'|'ruby2.7'|'provided'|'provided.al2'|'nodejs18.x'|'python3.10'|'java17'|'ruby3.2'|'ruby3.3'|'python3.11'|'nodejs20.x'|'provided.al2023'|'python3.12'|'java21'|'python3.13'|'nodejs22.x'|null,
     *     Role: string,
     *     Handler?: string|null,
     *     Code: Shapes\FunctionCode,
     *     Description?: string|null,
     *     Timeout?: int<1, max>|null,
     *     MemorySize?: int<128, 10240>|null,
     *     Publish?: bool|null,
     *     VpcConfig?: Shapes\VpcConfig|null,
     *     PackageType?: 'Zip'|'Image'|null,
     *     DeadLetterConfig?: Shapes\DeadLetterConfig|null,
     *     Environment?: Shapes\Environment|null,
     *     KMSKeyArn?: string|null,
     *     TracingConfig?: Shapes\TracingConfig|null,
     *     Tags?: array<string, string>|null,
     *     Layers?: list<string>|null,
     *     FileSystemConfigs?: list<Shapes\FileSystemConfig>|null,
     *     ImageConfig?: Shapes\ImageConfig|null,
     *     CodeSigningConfigArn?: string|null,
     *     Architectures?: list<'x86_64'|'arm64'>|null,
     *     EphemeralStorage?: Shapes\EphemeralStorage|null,
     *     SnapStart?: Shapes\SnapStart|null,
     *     LoggingConfig?: Shapes\LoggingConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
