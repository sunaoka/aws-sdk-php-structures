<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsLambdaFunctionCode $Code
 * @property string $CodeSha256
 * @property AwsLambdaFunctionDeadLetterConfig $DeadLetterConfig
 * @property AwsLambdaFunctionEnvironment $Environment
 * @property string $FunctionName
 * @property string $Handler
 * @property string $KmsKeyArn
 * @property string $LastModified
 * @property list<AwsLambdaFunctionLayer> $Layers
 * @property string $MasterArn
 * @property int $MemorySize
 * @property string $RevisionId
 * @property string $Role
 * @property string $Runtime
 * @property int $Timeout
 * @property AwsLambdaFunctionTracingConfig $TracingConfig
 * @property AwsLambdaFunctionVpcConfig $VpcConfig
 * @property string $Version
 * @property list<string> $Architectures
 * @property string $PackageType
 */
class AwsLambdaFunctionDetails extends Shape
{
    /**
     * @param array{
     *     Code?: AwsLambdaFunctionCode,
     *     CodeSha256?: string,
     *     DeadLetterConfig?: AwsLambdaFunctionDeadLetterConfig,
     *     Environment?: AwsLambdaFunctionEnvironment,
     *     FunctionName?: string,
     *     Handler?: string,
     *     KmsKeyArn?: string,
     *     LastModified?: string,
     *     Layers?: list<AwsLambdaFunctionLayer>,
     *     MasterArn?: string,
     *     MemorySize?: int,
     *     RevisionId?: string,
     *     Role?: string,
     *     Runtime?: string,
     *     Timeout?: int,
     *     TracingConfig?: AwsLambdaFunctionTracingConfig,
     *     VpcConfig?: AwsLambdaFunctionVpcConfig,
     *     Version?: string,
     *     Architectures?: list<string>,
     *     PackageType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
