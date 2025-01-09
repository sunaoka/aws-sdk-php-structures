<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateLambdaFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $FunctionArn
 */
class DisassociateLambdaFunctionRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     FunctionArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
