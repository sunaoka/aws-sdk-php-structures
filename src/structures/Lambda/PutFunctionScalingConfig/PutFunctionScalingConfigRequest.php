<?php

namespace Sunaoka\Aws\Structures\Lambda\PutFunctionScalingConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string $Qualifier
 * @property Shapes\FunctionScalingConfig|null $FunctionScalingConfig
 */
class PutFunctionScalingConfigRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Qualifier: string,
     *     FunctionScalingConfig?: Shapes\FunctionScalingConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
