<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string|null $Role
 * @property string|null $Handler
 * @property string|null $Description
 * @property int<1, max>|null $Timeout
 * @property int<128, 32768>|null $MemorySize
 * @property Shapes\VpcConfig|null $VpcConfig
 * @property Shapes\Environment|null $Environment
 * @property 'nodejs'|'nodejs4.3'|'nodejs6.10'|'nodejs8.10'|'nodejs10.x'|'nodejs12.x'|'nodejs14.x'|'nodejs16.x'|'java8'|'java8.al2'|'java11'|'python2.7'|'python3.6'|'python3.7'|'python3.8'|'python3.9'|'dotnetcore1.0'|'dotnetcore2.0'|'dotnetcore2.1'|'dotnetcore3.1'|'dotnet6'|'dotnet8'|'nodejs4.3-edge'|'go1.x'|'ruby2.5'|'ruby2.7'|'provided'|'provided.al2'|'nodejs18.x'|'python3.10'|'java17'|'ruby3.2'|'ruby3.3'|'ruby3.4'|'python3.11'|'nodejs20.x'|'provided.al2023'|'python3.12'|'java21'|'python3.13'|'nodejs22.x'|'nodejs24.x'|'python3.14'|'java25'|null $Runtime
 * @property Shapes\DeadLetterConfig|null $DeadLetterConfig
 * @property string|null $KMSKeyArn
 * @property Shapes\TracingConfig|null $TracingConfig
 * @property string|null $RevisionId
 * @property list<string>|null $Layers
 * @property list<Shapes\FileSystemConfig>|null $FileSystemConfigs
 * @property Shapes\ImageConfig|null $ImageConfig
 * @property Shapes\EphemeralStorage|null $EphemeralStorage
 * @property Shapes\SnapStart|null $SnapStart
 * @property Shapes\LoggingConfig|null $LoggingConfig
 * @property Shapes\CapacityProviderConfig|null $CapacityProviderConfig
 */
class UpdateFunctionConfigurationRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Role?: string|null,
     *     Handler?: string|null,
     *     Description?: string|null,
     *     Timeout?: int<1, max>|null,
     *     MemorySize?: int<128, 32768>|null,
     *     VpcConfig?: Shapes\VpcConfig|null,
     *     Environment?: Shapes\Environment|null,
     *     Runtime?: 'nodejs'|'nodejs4.3'|'nodejs6.10'|'nodejs8.10'|'nodejs10.x'|'nodejs12.x'|'nodejs14.x'|'nodejs16.x'|'java8'|'java8.al2'|'java11'|'python2.7'|'python3.6'|'python3.7'|'python3.8'|'python3.9'|'dotnetcore1.0'|'dotnetcore2.0'|'dotnetcore2.1'|'dotnetcore3.1'|'dotnet6'|'dotnet8'|'nodejs4.3-edge'|'go1.x'|'ruby2.5'|'ruby2.7'|'provided'|'provided.al2'|'nodejs18.x'|'python3.10'|'java17'|'ruby3.2'|'ruby3.3'|'ruby3.4'|'python3.11'|'nodejs20.x'|'provided.al2023'|'python3.12'|'java21'|'python3.13'|'nodejs22.x'|'nodejs24.x'|'python3.14'|'java25'|null,
     *     DeadLetterConfig?: Shapes\DeadLetterConfig|null,
     *     KMSKeyArn?: string|null,
     *     TracingConfig?: Shapes\TracingConfig|null,
     *     RevisionId?: string|null,
     *     Layers?: list<string>|null,
     *     FileSystemConfigs?: list<Shapes\FileSystemConfig>|null,
     *     ImageConfig?: Shapes\ImageConfig|null,
     *     EphemeralStorage?: Shapes\EphemeralStorage|null,
     *     SnapStart?: Shapes\SnapStart|null,
     *     LoggingConfig?: Shapes\LoggingConfig|null,
     *     CapacityProviderConfig?: Shapes\CapacityProviderConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
