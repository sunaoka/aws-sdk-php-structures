<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferRxNorm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $Code
 * @property float|null $Score
 */
class RxNormConcept extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Code?: string|null,
     *     Score?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
