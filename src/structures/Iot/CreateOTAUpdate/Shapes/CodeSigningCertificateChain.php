<?php

namespace Sunaoka\Aws\Structures\Iot\CreateOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $certificateName
 * @property string $inlineDocument
 */
class CodeSigningCertificateChain extends Shape
{
    /**
     * @param array{
     *     certificateName?: string,
     *     inlineDocument?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
