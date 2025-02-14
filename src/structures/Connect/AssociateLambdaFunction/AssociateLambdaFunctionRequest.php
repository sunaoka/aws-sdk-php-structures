<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateLambdaFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $FunctionArn
 * @property string|null $ClientToken
 */
class AssociateLambdaFunctionRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     FunctionArn: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
