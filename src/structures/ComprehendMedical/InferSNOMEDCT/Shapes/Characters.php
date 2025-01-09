<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferSNOMEDCT\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $OriginalTextCharacters
 */
class Characters extends Shape
{
    /**
     * @param array{OriginalTextCharacters?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
