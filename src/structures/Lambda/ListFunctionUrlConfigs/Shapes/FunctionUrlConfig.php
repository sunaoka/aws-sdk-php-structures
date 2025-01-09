<?php

namespace Sunaoka\Aws\Structures\Lambda\ListFunctionUrlConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FunctionUrl
 * @property string $FunctionArn
 * @property string $CreationTime
 * @property string $LastModifiedTime
 * @property Cors $Cors
 * @property 'NONE'|'AWS_IAM' $AuthType
 * @property 'BUFFERED'|'RESPONSE_STREAM' $InvokeMode
 */
class FunctionUrlConfig extends Shape
{
    /**
     * @param array{
     *     FunctionUrl: string,
     *     FunctionArn: string,
     *     CreationTime: string,
     *     LastModifiedTime: string,
     *     Cors?: Cors,
     *     AuthType: 'NONE'|'AWS_IAM',
     *     InvokeMode?: 'BUFFERED'|'RESPONSE_STREAM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
