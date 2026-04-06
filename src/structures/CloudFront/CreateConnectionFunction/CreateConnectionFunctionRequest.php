<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateConnectionFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\FunctionConfig $ConnectionFunctionConfig
 * @property string|resource|\Psr\Http\Message\StreamInterface $ConnectionFunctionCode
 * @property Shapes\Tags|null $Tags
 */
class CreateConnectionFunctionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ConnectionFunctionConfig: Shapes\FunctionConfig,
     *     ConnectionFunctionCode: string|resource|\Psr\Http\Message\StreamInterface,
     *     Tags?: Shapes\Tags|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
