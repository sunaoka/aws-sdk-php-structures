<?php

namespace Sunaoka\Aws\Structures\CloudFront\TestConnectionFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $IfMatch
 * @property 'DEVELOPMENT'|'LIVE'|null $Stage
 * @property string|resource|\Psr\Http\Message\StreamInterface $ConnectionObject
 */
class TestConnectionFunctionRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     IfMatch: string,
     *     Stage?: 'DEVELOPMENT'|'LIVE'|null,
     *     ConnectionObject: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
