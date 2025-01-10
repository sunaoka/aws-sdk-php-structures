<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $IfMatch
 * @property Shapes\FunctionConfig $FunctionConfig
 * @property string|resource|\Psr\Http\Message\StreamInterface $FunctionCode
 */
class UpdateFunctionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     IfMatch: string,
     *     FunctionConfig: Shapes\FunctionConfig,
     *     FunctionCode: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
