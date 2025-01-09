<?php

namespace Sunaoka\Aws\Structures\SesV2\SendBulkEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReplacementTemplate $ReplacementTemplate
 */
class ReplacementEmailContent extends Shape
{
    /**
     * @param array{ReplacementTemplate?: ReplacementTemplate} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
