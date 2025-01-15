<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteFunctionEventInvokeConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string|null $Qualifier
 */
class DeleteFunctionEventInvokeConfigRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Qualifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
