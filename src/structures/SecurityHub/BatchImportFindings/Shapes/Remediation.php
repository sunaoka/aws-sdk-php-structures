<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Recommendation $Recommendation
 */
class Remediation extends Shape
{
    /**
     * @param array{Recommendation?: Recommendation} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
