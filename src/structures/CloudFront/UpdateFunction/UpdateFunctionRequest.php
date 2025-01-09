<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $IfMatch
 * @property Shapes\FunctionConfig $FunctionConfig
 * @property string $FunctionCode
 */
class UpdateFunctionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     IfMatch: string,
     *     FunctionConfig: Shapes\FunctionConfig,
     *     FunctionCode: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
