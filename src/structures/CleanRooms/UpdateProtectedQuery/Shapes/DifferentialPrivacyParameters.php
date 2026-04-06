<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateProtectedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DifferentialPrivacySensitivityParameters> $sensitivityParameters
 */
class DifferentialPrivacyParameters extends Shape
{
    /**
     * @param array{sensitivityParameters: list<DifferentialPrivacySensitivityParameters>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
