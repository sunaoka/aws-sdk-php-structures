<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Recommendation|null $Recommendation
 */
class Remediation extends Shape
{
    /**
     * @param array{Recommendation?: Recommendation|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
