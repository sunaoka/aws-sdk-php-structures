<?php

namespace Sunaoka\Aws\Structures\Iot\CreateOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inlineDocument
 */
class CodeSigningSignature extends Shape
{
    /**
     * @param array{inlineDocument?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
