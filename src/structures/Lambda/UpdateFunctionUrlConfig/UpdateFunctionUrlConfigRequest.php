<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionUrlConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string|null $Qualifier
 * @property 'NONE'|'AWS_IAM'|null $AuthType
 * @property Shapes\Cors|null $Cors
 * @property 'BUFFERED'|'RESPONSE_STREAM'|null $InvokeMode
 */
class UpdateFunctionUrlConfigRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Qualifier?: string|null,
     *     AuthType?: 'NONE'|'AWS_IAM'|null,
     *     Cors?: Shapes\Cors|null,
     *     InvokeMode?: 'BUFFERED'|'RESPONSE_STREAM'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
