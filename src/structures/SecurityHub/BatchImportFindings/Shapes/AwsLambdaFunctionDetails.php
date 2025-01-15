<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsLambdaFunctionCode|null $Code
 * @property string|null $CodeSha256
 * @property AwsLambdaFunctionDeadLetterConfig|null $DeadLetterConfig
 * @property AwsLambdaFunctionEnvironment|null $Environment
 * @property string|null $FunctionName
 * @property string|null $Handler
 * @property string|null $KmsKeyArn
 * @property string|null $LastModified
 * @property list<AwsLambdaFunctionLayer>|null $Layers
 * @property string|null $MasterArn
 * @property int|null $MemorySize
 * @property string|null $RevisionId
 * @property string|null $Role
 * @property string|null $Runtime
 * @property int|null $Timeout
 * @property AwsLambdaFunctionTracingConfig|null $TracingConfig
 * @property AwsLambdaFunctionVpcConfig|null $VpcConfig
 * @property string|null $Version
 * @property list<string>|null $Architectures
 * @property string|null $PackageType
 */
class AwsLambdaFunctionDetails extends Shape
{
    /**
     * @param array{
     *     Code?: AwsLambdaFunctionCode|null,
     *     CodeSha256?: string|null,
     *     DeadLetterConfig?: AwsLambdaFunctionDeadLetterConfig|null,
     *     Environment?: AwsLambdaFunctionEnvironment|null,
     *     FunctionName?: string|null,
     *     Handler?: string|null,
     *     KmsKeyArn?: string|null,
     *     LastModified?: string|null,
     *     Layers?: list<AwsLambdaFunctionLayer>|null,
     *     MasterArn?: string|null,
     *     MemorySize?: int|null,
     *     RevisionId?: string|null,
     *     Role?: string|null,
     *     Runtime?: string|null,
     *     Timeout?: int|null,
     *     TracingConfig?: AwsLambdaFunctionTracingConfig|null,
     *     VpcConfig?: AwsLambdaFunctionVpcConfig|null,
     *     Version?: string|null,
     *     Architectures?: list<string>|null,
     *     PackageType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
