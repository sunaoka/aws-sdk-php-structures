<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ScalarReferenceDetails|null $ScalarReferenceDetails
 */
class ReferenceDetails extends Shape
{
    /**
     * @param array{ScalarReferenceDetails?: ScalarReferenceDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
