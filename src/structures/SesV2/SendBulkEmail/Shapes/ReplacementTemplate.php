<?php

namespace Sunaoka\Aws\Structures\SesV2\SendBulkEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReplacementTemplateData
 */
class ReplacementTemplate extends Shape
{
    /**
     * @param array{ReplacementTemplateData?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
