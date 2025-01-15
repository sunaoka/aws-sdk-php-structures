<?php

namespace Sunaoka\Aws\Structures\CloudFront\TestFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $IfMatch
 * @property 'DEVELOPMENT'|'LIVE'|null $Stage
 * @property string|resource|\Psr\Http\Message\StreamInterface $EventObject
 */
class TestFunctionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     IfMatch: string,
     *     Stage?: 'DEVELOPMENT'|'LIVE'|null,
     *     EventObject: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
