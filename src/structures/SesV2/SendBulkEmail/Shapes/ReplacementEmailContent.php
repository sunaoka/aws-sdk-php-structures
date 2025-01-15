<?php

namespace Sunaoka\Aws\Structures\SesV2\SendBulkEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReplacementTemplate|null $ReplacementTemplate
 */
class ReplacementEmailContent extends Shape
{
    /**
     * @param array{ReplacementTemplate?: ReplacementTemplate|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
