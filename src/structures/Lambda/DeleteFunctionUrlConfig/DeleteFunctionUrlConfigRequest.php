<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteFunctionUrlConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string|null $Qualifier
 */
class DeleteFunctionUrlConfigRequest extends Request
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
