<?php

namespace Sunaoka\Aws\Structures\Iot\CreateOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $certificateName
 * @property string|null $inlineDocument
 */
class CodeSigningCertificateChain extends Shape
{
    /**
     * @param array{
     *     certificateName?: string|null,
     *     inlineDocument?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
