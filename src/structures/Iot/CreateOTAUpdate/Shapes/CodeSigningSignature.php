<?php

namespace Sunaoka\Aws\Structures\Iot\CreateOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $inlineDocument
 */
class CodeSigningSignature extends Shape
{
    /**
     * @param array{inlineDocument?: string|resource|\Psr\Http\Message\StreamInterface|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
