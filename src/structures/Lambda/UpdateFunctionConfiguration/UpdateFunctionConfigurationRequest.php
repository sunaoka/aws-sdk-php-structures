<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string $Role
 * @property string $Handler
 * @property string $Description
 * @property int $Timeout
 * @property int $MemorySize
 * @property Shapes\VpcConfig $VpcConfig
 * @property Shapes\Environment $Environment
 * @property 'nodejs'|'nodejs4.3'|'nodejs6.10'|'nodejs8.10'|'nodejs10.x'|'nodejs12.x'|'nodejs14.x'|'nodejs16.x'|'java8'|'java8.al2'|'java11'|'python2.7'|'python3.6'|'python3.7'|'python3.8'|'python3.9'|'dotnetcore1.0'|'dotnetcore2.0'|'dotnetcore2.1'|'dotnetcore3.1'|'dotnet6'|'dotnet8'|'nodejs4.3-edge'|'go1.x'|'ruby2.5'|'ruby2.7'|'provided'|'provided.al2'|'nodejs18.x'|'python3.10'|'java17'|'ruby3.2'|'ruby3.3'|'python3.11'|'nodejs20.x'|'provided.al2023'|'python3.12'|'java21'|'python3.13'|'nodejs22.x' $Runtime
 * @property Shapes\DeadLetterConfig $DeadLetterConfig
 * @property string $KMSKeyArn
 * @property Shapes\TracingConfig $TracingConfig
 * @property string $RevisionId
 * @property list<string> $Layers
 * @property list<Shapes\FileSystemConfig> $FileSystemConfigs
 * @property Shapes\ImageConfig $ImageConfig
 * @property Shapes\EphemeralStorage $EphemeralStorage
 * @property Shapes\SnapStart $SnapStart
 * @property Shapes\LoggingConfig $LoggingConfig
 */
class UpdateFunctionConfigurationRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Role?: string,
     *     Handler?: string,
     *     Description?: string,
     *     Timeout?: int,
     *     MemorySize?: int,
     *     VpcConfig?: Shapes\VpcConfig,
     *     Environment?: Shapes\Environment,
     *     Runtime?: 'nodejs'|'nodejs4.3'|'nodejs6.10'|'nodejs8.10'|'nodejs10.x'|'nodejs12.x'|'nodejs14.x'|'nodejs16.x'|'java8'|'java8.al2'|'java11'|'python2.7'|'python3.6'|'python3.7'|'python3.8'|'python3.9'|'dotnetcore1.0'|'dotnetcore2.0'|'dotnetcore2.1'|'dotnetcore3.1'|'dotnet6'|'dotnet8'|'nodejs4.3-edge'|'go1.x'|'ruby2.5'|'ruby2.7'|'provided'|'provided.al2'|'nodejs18.x'|'python3.10'|'java17'|'ruby3.2'|'ruby3.3'|'python3.11'|'nodejs20.x'|'provided.al2023'|'python3.12'|'java21'|'python3.13'|'nodejs22.x',
     *     DeadLetterConfig?: Shapes\DeadLetterConfig,
     *     KMSKeyArn?: string,
     *     TracingConfig?: Shapes\TracingConfig,
     *     RevisionId?: string,
     *     Layers?: list<string>,
     *     FileSystemConfigs?: list<Shapes\FileSystemConfig>,
     *     ImageConfig?: Shapes\ImageConfig,
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
