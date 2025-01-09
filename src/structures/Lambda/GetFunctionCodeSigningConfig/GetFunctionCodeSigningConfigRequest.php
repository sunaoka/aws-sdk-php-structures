<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunctionCodeSigningConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 */
class GetFunctionCodeSigningConfigRequest extends Request
{
    /**
     * @param array{FunctionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
