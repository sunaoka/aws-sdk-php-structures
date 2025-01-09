<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteFunctionCodeSigningConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 */
class DeleteFunctionCodeSigningConfigRequest extends Request
{
    /**
     * @param array{FunctionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
