<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateFunctionUrlConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string $Qualifier
 * @property 'NONE'|'AWS_IAM' $AuthType
 * @property Shapes\Cors $Cors
 * @property 'BUFFERED'|'RESPONSE_STREAM' $InvokeMode
 */
class CreateFunctionUrlConfigRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Qualifier?: string,
     *     AuthType: 'NONE'|'AWS_IAM',
     *     Cors?: Shapes\Cors,
     *     InvokeMode?: 'BUFFERED'|'RESPONSE_STREAM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
