<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetSchemaAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConsolidatedPolicyV1|null $v1
 */
class ConsolidatedPolicy extends Shape
{
    /**
     * @param array{v1?: ConsolidatedPolicyV1|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
