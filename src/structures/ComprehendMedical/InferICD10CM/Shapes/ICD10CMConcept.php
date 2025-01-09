<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferICD10CM\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $Code
 * @property float $Score
 */
class ICD10CMConcept extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     Code?: string,
     *     Score?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
