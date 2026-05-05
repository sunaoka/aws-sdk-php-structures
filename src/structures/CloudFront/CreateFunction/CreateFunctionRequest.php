<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\FunctionConfig $FunctionConfig
 * @property string|resource|\Psr\Http\Message\StreamInterface $FunctionCode
 * @property Shapes\Tags|null $Tags
 */
class CreateFunctionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     FunctionConfig: Shapes\FunctionConfig,
     *     FunctionCode: string|resource|\Psr\Http\Message\StreamInterface,
     *     Tags?: Shapes\Tags|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
