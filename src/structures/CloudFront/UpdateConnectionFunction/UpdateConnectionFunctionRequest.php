<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateConnectionFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $IfMatch
 * @property Shapes\FunctionConfig $ConnectionFunctionConfig
 * @property string|resource|\Psr\Http\Message\StreamInterface $ConnectionFunctionCode
 */
class UpdateConnectionFunctionRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     IfMatch: string,
     *     ConnectionFunctionConfig: Shapes\FunctionConfig,
     *     ConnectionFunctionCode: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
