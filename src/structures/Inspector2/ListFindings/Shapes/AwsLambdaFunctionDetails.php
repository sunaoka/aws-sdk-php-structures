<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'X86_64'|'ARM64'>|null $architectures
 * @property string $codeSha256
 * @property string $executionRoleArn
 * @property string $functionName
 * @property \Aws\Api\DateTimeResult|null $lastModifiedAt
 * @property list<string>|null $layers
 * @property 'IMAGE'|'ZIP'|null $packageType
 * @property 'NODEJS'|'NODEJS_12_X'|'NODEJS_14_X'|'NODEJS_16_X'|'JAVA_8'|'JAVA_8_AL2'|'JAVA_11'|'PYTHON_3_7'|'PYTHON_3_8'|'PYTHON_3_9'|'UNSUPPORTED'|'NODEJS_18_X'|'GO_1_X'|'JAVA_17'|'PYTHON_3_10' $runtime
 * @property string $version
 * @property LambdaVpcConfig|null $vpcConfig
 */
class AwsLambdaFunctionDetails extends Shape
{
    /**
     * @param array{
     *     architectures?: list<'X86_64'|'ARM64'>|null,
     *     codeSha256: string,
     *     executionRoleArn: string,
     *     functionName: string,
     *     lastModifiedAt?: \Aws\Api\DateTimeResult|null,
     *     layers?: list<string>|null,
     *     packageType?: 'IMAGE'|'ZIP'|null,
     *     runtime: 'NODEJS'|'NODEJS_12_X'|'NODEJS_14_X'|'NODEJS_16_X'|'JAVA_8'|'JAVA_8_AL2'|'JAVA_11'|'PYTHON_3_7'|'PYTHON_3_8'|'PYTHON_3_9'|'UNSUPPORTED'|'NODEJS_18_X'|'GO_1_X'|'JAVA_17'|'PYTHON_3_10',
     *     version: string,
     *     vpcConfig?: LambdaVpcConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
