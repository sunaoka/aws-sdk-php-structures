<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateFunctionUrlConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string|null $Qualifier
 * @property 'NONE'|'AWS_IAM' $AuthType
 * @property Shapes\Cors|null $Cors
 * @property 'BUFFERED'|'RESPONSE_STREAM'|null $InvokeMode
 */
class CreateFunctionUrlConfigRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Qualifier?: string|null,
     *     AuthType: 'NONE'|'AWS_IAM',
     *     Cors?: Shapes\Cors|null,
     *     InvokeMode?: 'BUFFERED'|'RESPONSE_STREAM'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
