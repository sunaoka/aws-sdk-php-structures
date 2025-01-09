<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StandardsId
 */
class AssociatedStandard extends Shape
{
    /**
     * @param array{StandardsId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
